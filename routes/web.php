<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hain', [HomeController::class, 'index'])->name('home');

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/products/by-category/{categoryId?}', [HomeController::class, 'fetchByCategory'])->name('products.by-category');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/login/vendors', [LoginController::class, 'vendor_login'])->name('vendor.login');
Route::get('/login/riders', [LoginController::class, 'rider_login'])->name('rider.login');
Route::post('/admin/login', [LoginController::class, 'loginAdmin'])->name('admin.login.submit');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Facebook Routes
Route::get('login/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);

// Google Routes
Route::get('login/google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::post('/wishlist/add', [WishlistController::class, 'store'])->name('wishlist.add');
    Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy'])->name('wishlist.remove');

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/wishlist', [HomeController::class, 'dashboard'])->name('wishlist');
    Route::get('/cart', [HomeController::class, 'dashboard'])->name('cart');
    Route::get('/account', [HomeController::class, 'dashboard'])->name('account');
    Route::get('/orders', [HomeController::class, 'dashboard'])->name('orders');
    Route::get('/vouchers', [HomeController::class, 'dashboard'])->name('vouchers');

    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/products', [AdminController::class, 'adminProducts'])->name('admin.products');
    Route::get('/admin/categories', [AdminController::class, 'adminCategories'])->name('admin.categories');
    Route::get('/admin/orders', [AdminController::class, 'adminOrders'])->name('admin.orders');
    //Route::get('/admin/order/detail', [AdminController::class, 'adminOrderDetail'])->name('admin.order.details');
    Route::get('/admin/orders/{id}', [AdminController::class, 'show'])->name('admin.orders.show');
    Route::patch('/admin/orders/{id}/accept', [AdminController::class, 'accept'])->name('admin.orders.accept');
    Route::patch('/admin/orders/{id}/ready', [AdminController::class, 'markAsReady'])->name('admin.orders.ready');

    Route::get('/admin/vendor', [AdminController::class, 'adminVendors'])->name('admin.vendors');
    Route::get('admin/vendors/details/{id}', [AdminController::class, 'adminVendorDetails'])->name('admin.vendors.show');
    Route::get('admin/vendors/profile/{id}', [AdminController::class, 'adminVendorProfile'])->name('admin.vendors.profile');

    Route::get('/admin/rider/notification', [AdminController::class, 'riderNotification'])->name('rider.notifications');
    Route::get('/admin/rider/pickups', [AdminController::class, 'riderPickup'])->name('rider.pickup');
    Route::get('/admin/rider/delivery', [AdminController::class, 'riderDelivery'])->name('rider.delivery');
    Route::post('/rider/pickup/{id}', [AdminController::class, 'confirmPickup'])
    ->name('rider.pickup.confirm')
    ->middleware(['auth']);

    Route::post('/rider/deliver/update/{id}', [AdminController::class, 'markInTransit'])->name('rider.deliver.update');
    Route::post('/rider/deliver/complete/{id}', [AdminController::class, 'markAsDelivered'])->name('rider.deliver.complete');

});

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login')->with('success', 'You have been logged out.');
})->name('logout');