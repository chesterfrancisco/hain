<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use Carbon\Carbon;
use App\Models\Review;
use App\Models\OrderItem;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $categories = ProductCategory::all();
        $featuredProducts = Product::where('is_featured', 1)->take(8)->get();
        //$popularProducts = Product::orderBy('views', 'desc')->take(8)->get(); // or based on order count
        $featuredVendors = Vendor::where('is_featured', 1)->take(4)->get();
        $recentlyAdded = Product::latest()->take(8)->get();
        //$dealsOfTheDay = Product::where('deal_end', '>=', Carbon::now())->take(8)->get();
        //$topSelling = Product::withCount('orderItems')->orderByDesc('order_items_count')->take(8)->get();
        //$sustainableProducts = Product::where('is_sustainable', 1)->take(8)->get();
        $sustainableVendors = Vendor::where('is_sustainable', 1)->take(6)->get();
        $recentlyAdded = Product::latest()->take(3)->get();
        // $topRated = Product::withAvg('reviews', 'rating')->orderByDesc('reviews_avg_rating')->take(8)->get();
        $topSelling = Product::withAvg('reviews', 'rating')
        ->withCount('orderItems')
        ->orderByDesc('order_items_count')
        ->take(3)
        ->get();

         //Top Rated: based on average rating
        $topRated = Product::withAvg('reviews', 'rating')
        ->orderByDesc('reviews_avg_rating')
        ->take(3)
        ->get();

        return view('pages.home', compact(
            'categories',
            'featuredProducts',
            //'popularProducts',
            'featuredVendors',
            //'dealsOfTheDay',
            'topSelling',
            //'sustainableProducts',
            'sustainableVendors',
            'recentlyAdded',
            'topRated'
        ));
    }

   
    public function fetchByCategory($categoryId = null)
    {
        $query = Product::join('vendors', 'products.vendor_id', '=', 'vendors.id')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select(
                'products.product_name',
                'products.price',
                'products.image_path',
                'vendors.vendor_name',
                'product_categories.category_name'
            );

        if ($categoryId !== 'all') {
            $query->where('products.category_id', $categoryId);
        }

        $products = $query->inRandomOrder()->take(10)->get();

        return response()->json($products);
    }

    public function dashboard()
    {
        $categories = ProductCategory::all();
        $featuredProducts = Product::where('is_featured', 1)->take(8)->get();
        //$popularProducts = Product::orderBy('views', 'desc')->take(8)->get(); // or based on order count
        $featuredVendors = Vendor::where('is_featured', 1)->take(4)->get();
        $recentlyAdded = Product::latest()->take(8)->get();
        //$dealsOfTheDay = Product::where('deal_end', '>=', Carbon::now())->take(8)->get();
        //$topSelling = Product::withCount('orderItems')->orderByDesc('order_items_count')->take(8)->get();
        //$sustainableProducts = Product::where('is_sustainable', 1)->take(8)->get();
        $sustainableVendors = Vendor::where('is_sustainable', 1)->take(6)->get();
        $recentlyAdded = Product::latest()->take(3)->get();
        // $topRated = Product::withAvg('reviews', 'rating')->orderByDesc('reviews_avg_rating')->take(8)->get();
        $topSelling = Product::withAvg('reviews', 'rating')
        ->withCount('orderItems')
        ->orderByDesc('order_items_count')
        ->take(3)
        ->get();

         //Top Rated: based on average rating
        $topRated = Product::withAvg('reviews', 'rating')
        ->orderByDesc('reviews_avg_rating')
        ->take(3)
        ->get();

        return view('pages.user.dashboard', compact(
            'categories',
            'featuredProducts',
            //'popularProducts',
            'featuredVendors',
            //'dealsOfTheDay',
            'topSelling',
            //'sustainableProducts',
            'sustainableVendors',
            'recentlyAdded',
            'topRated'
        ));
    }

}
