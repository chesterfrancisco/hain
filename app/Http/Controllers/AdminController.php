<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use Carbon\Carbon;
use App\Models\Review;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\ProductCategory;
use App\Models\Delivery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function adminDashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function adminProducts()
    {
        $category = ProductCategory::all();
        $product = Product::latest()->take(12)->get();
        return view('pages.admin.products',compact('product','category'));
    }

    public function adminCategories()
    {
        $categories = ProductCategory::all();
        return view('pages.admin.categories',compact('categories'));
    }

    public function adminOrders()
    {
        $orders = Order::with('user')->get();
        return view('pages.admin.order',compact('orders'));
    }

    public function show($id)
    {
        $order= Order::with(['user', 'orderItems.product'])->findOrFail($id);
        return view('pages.admin.orderdetails', compact('order'));
    }

    public function accept($id)
    {
        $order = Order::findOrFail($id);
        $order->order_status = 'accepted';
        $order->save();

        return back()->with('success', 'Order accepted.');
    }

    public function markAsReady($id)
    {
        $order = Order::findOrFail($id);
        $order->order_status = 'ready_for_delivery';
        $order->save();

        return back()->with('success', 'Order marked as ready for delivery.');
    }

    public function adminVendors()
    {
        $vendors = Vendor::all();
        return view('pages.admin.vendors',compact('vendors'));
    }

    public function adminVendorDetails($id)
    {
        $vendor = Vendor::findOrFail($id);

        // Fetch all products of this vendor
        $products = Product::where('vendor_id', $vendor->id)->get();

        return view('pages.admin.vendor-details', compact('vendor', 'products'));
    }

    public function adminVendorProfile($id)
    {
        $vendor = Vendor::findOrFail($id);
        $products = Product::where('vendor_id', 3)->get();

        return view('pages.admin.vendor-details', compact('vendor', 'products'));
    }

    public function riderNotification()
    {
        $orders = Order::where('order_status', "ready_for_delivery")->get();
        return view('pages.admin.rider.order-notification', compact('orders'));
    }

    public function confirmPickup($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Optional: Check if already picked up
        if (Delivery::where('order_id', $order->id)->exists()) {
            return back()->with('error', 'This order is already being handled by a rider.');
        }

        // Insert into deliveries table
        Delivery::create([
            'order_id' => $order->id,
            //'rider_id' => Auth::id(),
            'pickup_time' => now(),
            'status' => 'picked_up',
            'remarks' => 'Rider has accepted the order.'
        ]);

        // Optional: You can also update order status if you still track it there
        // $order->order_status = 'picked_up';
        // $order->save();

        return redirect()->route('rider.pickup')->with('success', 'Order assigned to you. Please proceed to pickup.');
    }

    public function riderPickup()
    {
        
        $deliveries = Delivery::with('order')->where('status', 'picked_up')->get();

        return view('pages.admin.rider.order-pickup', compact('deliveries'));
    }

    public function markInTransit($id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->status = 'in_transit';
        $delivery->remarks = 'Heading to customer';
        $delivery->save();

        return back()->with('success', 'Order is now marked as in transit.');
    }

    public function riderDelivery()
    {

        $delivery = Delivery::with('order.user')
        //->where('rider_id', Auth::id())
        //->where('status', 'in_transit')
        ->firstOrFail();

        return view('pages.admin.rider.orderdelivery', compact('delivery'));
    }

    public function markAsDelivered($id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->status = 'delivered';
        $delivery->delivery_time = now();
        $delivery->remarks = 'Delivered successfully.';
        $delivery->save();

        return redirect()->route('rider.delivery')->with('success', 'Order marked as delivered.');
    }

    
    
    

}
