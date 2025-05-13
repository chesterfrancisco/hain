<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    // Show wishlist items for logged-in user
    public function index()
    {
        $items = Wishlist::with('product')
            ->where('user_id', Auth::id())
            ->get();

        return view('wishlist.index', compact('items'));
    }

    // Add to wishlist
 // Add to wishlist
    public function store(Request $request)
    {
        $productId = $request->input('product_id');

        if (!Auth::check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Ensure the product ID is a valid integer
        if (!is_numeric($productId) || (int)$productId <= 0) {
            return response()->json(['message' => 'Invalid product ID'], 422);
        }

        $productId = (int) $productId;

        // Check if product already exists
        $exists = Wishlist::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->exists();

        if ($exists) {
            return response()->json(['message' => 'Already in wishlist'], 200);
        }

        Wishlist::create([
            'user_id'    => Auth::id(),
            'product_id' => $productId
        ]);

        return response()->json(['message' => 'Added to wishlist'], 201);
    }

    // Remove from wishlist (optional)
    public function destroy($id)
    {
        Wishlist::where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'Removed from wishlist.');
    }
}
