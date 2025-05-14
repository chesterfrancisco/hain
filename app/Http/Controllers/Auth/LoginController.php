<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index()
    {
        $categories = ProductCategory::all();
        return view('auth.login', compact(
            'categories'));
    }

     public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check if credentials match any user
        if (Auth::attempt($credentials, $request->remember)) {
            $user = Auth::user();

            // Allow only vendor and rider
            if (in_array($user->user_type, ['customer'])) {
                return redirect()->route('dashboard')->with('success', 'Login successful. Welcome back!');
            } else {
                Auth::logout(); // Force logout if not authorized
                return redirect()->back()->with('error', 'Access denied. Only customer accounts can log in.');
            }
        }

        return redirect()->back()->with('error', 'Invalid email or password.');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check if credentials match any user
        if (Auth::attempt($credentials, $request->remember)) {
            $user = Auth::user();

            // Allow only vendor and rider
            if (in_array($user->user_type, ['vendor', 'rider','admin'])) {
                return redirect()->route('admin.dashboard')->with('success', 'Login successful. Welcome back!');
            } else {
                Auth::logout(); // Force logout if not authorized
                return redirect()->back()->with('error', 'Access denied. Only vendor and rider accounts can log in.');
            }
        }

        return redirect()->back()->with('error', 'Invalid email or password.');
    }

    public function vendor_login()
    {
        return view('auth.login-admin');
    }

    public function rider_login()
    {
        return view('auth.login-admin');
    }

   
}
