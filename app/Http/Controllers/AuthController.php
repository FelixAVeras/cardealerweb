<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    function validate_login(Request $request) {
        $this->validate($request, [
            'email' => 'required', 
            'password' => 'required'
        ]);

        if(!Auth::attempt($request->only(['email', 'password']))) {
            return redirect('login')->with('danger', 'Credentials are not valid');
        }

        return redirect()->route('home')->with('success', 'welcome again');

        // $request->validate(['email' =>  'required', 'password'  =>  'required']);

        // $credentials = $request->only('email', 'password');

        // if(!Auth::attempt($credentials)) {
        //     return redirect('login')->with('success', 'Credentials are not valid');
        // }

        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('home')->withSuccess('Signed in');
        // }

        // return redirect('home');
    }

    // Register User
    public function register() {
        return view('auth.register');
    }

    function validate_registration(Request $request) {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('home')->with('success', 'Registration Completed, now you can login');
    }

    // Home
    // function home() {
    //     if(Auth::check()) {
    //         return view('home.index');
    //     }

    //     return redirect('login')->with('success', 'you are not allowed to access');
    // }

    // Logout
    function logout() {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}
