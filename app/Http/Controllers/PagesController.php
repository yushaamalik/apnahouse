<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PagesController extends Controller
{
    //

    public function index()
    {
        # code...
        $plans = Plan::orderBy('id', 'desc')->get();
        return view('pages.index',
    [
        'plans' => $plans,
    ]);
    }
}
