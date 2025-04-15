<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordController extends Controller
{
    public function forgetPassword()
    {
        return view('auth.forgetPassword');
    }
    public function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $email = DB::table('password_reset_tokens')->where('email', $request->email)->first();

        if($email){
            return redirect()->back()->with('error','ایمیل برای بازیابی رمز عبور ارسال گردیده ایمیل خود را چک کنید');
        }

         $token = str()->random(64);
         DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
         ]);
         Mail::send('emails.forget-password',['token' => $token], function($message) use($request) {
            $message->to($request->email);
            $message->subject('Rest Password');
         });
         return redirect()->back()->with('success','ایمیل بازیابی رمزعبور ارسال شد لطفا ایمیل خود را بررسی کنید');
        }
    public function resetPassword($token)
    {
        return view('auth.resetPassword', compact('token'));
    }
    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|min:8|max:16|confirmed',
        ]);

        $updadePassword = DB::table('password_reset_tokens')->where([
            'token' => $request->token,
        ])->first();

        if(!$updadePassword){
            return redirect()->back()->with('error','همچین دیتایی وجود ندارد در سرور لطفا از طریق لینکی که به ایمیل ارسال شده اقدام کنید');
        }

        User::where('email', $updadePassword->email)->update([
            'password' => Hash::make($request->password),
        ]);

        DB::table('password_reset_tokens')->where([
            'token'=> $request->token,
        ])->delete();

        return redirect()->route('login')->with('success','رمز عبور شما با موفقیت در سیستم تغییر داده شد');
    }
    
}
