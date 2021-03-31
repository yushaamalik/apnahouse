<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Services\WooCommerce;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function home()
    {
        return view('home');
    }
}
