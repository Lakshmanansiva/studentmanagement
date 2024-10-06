<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    function loginpost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials =$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('student.index'));
        }
        return redirect(route('login'))->with('error','Login Failed');


    }
    function register(){
        return view('auth.registration');
    }
    function registerpost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()){
            return redirect(route("login"))->withSuccess('success','User Created Successfully!');
        }
        return redirect(route('register'))->with('error','Failed to creat account');
    }

}
    