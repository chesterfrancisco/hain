<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProductCategory;

class RegisterController extends Controller
{
    //
    public function index()
    {
        $categories = ProductCategory::all();
        return view('auth.register', compact(
            'categories'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:6',
            'confirm_password'  => 'required|same:password',
            'user_type'         => 'required|in:vendor,customer,rider',
            'security_code'     => 'required'
        ], [
            'confirm_password.same' => 'Password and Confirm Password do not match.',
            'security_code.required' => 'Security code is required.',
        ]);

        if ($request->security_code !== '8675') {
            return back()->withInput()->withErrors(['security_code' => 'Invalid security code.']);
        }

        $user = User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'user_type'     => $request->user_type,
            'phone_number'  => null,
            'address'       => null,
            'profile_image' => null
        ]);

        Auth::login($user);

        return redirect()->route('login')->with('success', 'Account has been successfully created!');
    }
}
