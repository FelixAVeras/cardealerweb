<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        // return view('home.index', [
        //     'user' => auth()->user()
        // ]);

        return view('home.index');
    }
}
