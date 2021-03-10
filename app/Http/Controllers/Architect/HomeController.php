<?php

namespace App\Http\Controllers\Architect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;   

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:architect');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('architect.dashboard');
    }
    //  

    

}
