<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    function authenticate(Request $request) {
        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ])->validate();

        if (auth()->attempt(request()->only(['email', 'password']))) {
            request()->session()->regenerate();

            return redirect('/home');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Register User
    public function register() {
        return view('auth.register');
    }

    function validate_registration(Request $request) {
        // $request->validate([
        //     'name'         =>   'required',
        //     'email'        =>   'required|email|unique:users',
        //     'password'     =>   'required|min:6'
        // ]);

        // $data = $request->all();

        // User::create([
        //     'name'  =>  $data['name'],
        //     'email' =>  $data['email'],
        //     'password' => Hash::make($data['password'])
        // ]);

        // return redirect('home')->with('success', 'Registration Completed, now you can login');

        $this->validator($request->all())->validate();
        
        event(new Registered($user = $this->create($request->all())));
        
        $this->guard()->login($user);

        return $this->registered($request, $user) ?: redirect($this->redirectPath());
    }

    // Logout
    function logout() {
        auth()->logout();

        return Redirect('login');
    }

    // Register validator
    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}
