<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Architect;
use App\Models\ArchitectProfile;
use App\Models\Plan;
use Auth;


class PlansController extends Controller
{
    //
    public function allPlans()
    {
        # code...
        $allPlans = Plan::orderBy('id', 'desc')->get();

        return view('admin.plan.allPlans', 
        [
            'allPlans'  => $allPlans,
        ]);
    }

    public function pendingPlans()
    {
        # code...
        $pendingPlans = Plan::where('plan_status', 0)->get();

        return view('admin.plan.pendingPlans', 
        [
            'pendingPlans'  => $pendingPlans,
        ]);
    }

    public function single($id)
    {
        # code...
        $plan = Plan::find($id);
        // echo $plan;
        // exit();
        return view('admin.plan.viewPlan',
        [
            'plan' => $plan,
        ]);
    }

    public function approvePlan($id)
    {
        # code...
        $plan = Plan::where('id', $id)->update(
            [
                'plan_status' => 1,
            ]
            );

            return redirect('admin/pending-plans');
    }

    public function rejectPlan($id)
    {
        # code...
        $plan = Plan::where('id', $id)->update(
            [
                'plan_status' => 2,
            ]
            );

            return redirect('admin/pending-plans');
    }
}
