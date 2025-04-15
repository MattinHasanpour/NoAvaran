<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        if(auth()->check()){
            return redirect()->route('home');
        }
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:15',
            'email' => 'required|email|min:10|max:30|unique:users',
            'password' => 'required|min:6|max:16|confirmed'
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        if(!$user) {
            return back()->with('error', 'خطا در ثبت نام');
        }

        return redirect()->route('login')->with('success', 'ثبت نام با موفقیت انجام شد');
    }
    public function login()
    {
        if(auth()->check()){
            return redirect()->route('home');
        }
        return view('auth.login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:6'
        ]);

        $user = User::where('email', $request->email)->first();
        if(!$user){
            return redirect()->back()->with(['error' => 'کاربری با این ایمیل وجود ندارد']);
        }

        if(!Hash::check($request->password, $user->password)){
            return redirect()->back()->with(['error' => 'رمز عبور صحیح نیست مجدد وارد کنید']);
        }

        Auth ::login($user);
        return redirect()->route('home');

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}