<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\PlanCategory;
use Illuminate\Http\Request;
use Facades\App\Services\WooCommerce;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'plans' => Plan::with(['architect', 'planCategory'])
                ->orderBy('id', 'desc')->limit(9)->get()
        ]);
    }

    public function plans()
    {
        return view('pages.plans', [
            'planCategories' => PlanCategory::with(['plans.architect'])->get()
        ]);
    }

    public function plan($id)
    {
        return view('pages.plan', [
            'plan' => Plan::with(['architect', 'planCategory'])->first()
        ]);
    }
}
