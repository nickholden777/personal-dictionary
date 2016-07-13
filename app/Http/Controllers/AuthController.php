<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function reg()
    {
    	return view('pages.reg');
    }

    public function regPost(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|max:30|email|unique:users,email',
    		'password' => 'required|min:4|confirmed',
            'password_confirmation' => 'required'
    	]);

        User::create([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        if(!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }

    public function login()
    {
    	return view('pages.login');
    }

    public function loginPost(Request $request)
    {
    	$this->validate($request, [
            'email' => 'required|max:30|email',
            'password' => 'required|min:4',
        ]);

        if(!Auth::attempt($request->only(['email', 'password']))) {
            $errors = 'Check your data please';
            return redirect()->back()->withErrors($errors);
        }

        return redirect()->route('home');
    }

    public function logout() 
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
