<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;




class LloginController extends Controller
{
    // عرض صفحة تسجيل الدخول
    public function showLlogin()
    {
        return view('site.pages.llogin');
    }

    // معالجة تسجيل الدخول
    public function llogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            return redirect()->intended('/')->with('success', 'Successful login');
        }

      //   return back()->with('error', 'Invalid login details');
    }
}
