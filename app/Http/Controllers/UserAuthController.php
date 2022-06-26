<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function showLogin($guard){
        return response()->view('cms.Auth.login' , compact('guard'));
    }

    public function Login(Request $request){

        $validator = Validator($request->all() ,[
            'email' => 'required|string|email',
            'password' => 'required|string|min:6'

        ]);

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        if (!$validator->fails()) {
            if (Auth::guard($request->get('guard'))->attempt($credentials, $request->get('remember_me'))) {
                return response()->json(['icon' => 'success', 'title' => 'نجحت عملية تسجيل الدخول'], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => 'فشلت عملية تسجيل الدخول '], 400);
            }
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    public function Logout(Request $request){

        Auth::guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('view.login' , 'admin');
    }
}
