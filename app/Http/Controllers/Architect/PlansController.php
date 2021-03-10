<?php

namespace App\Http\Controllers\Architect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Auth;

class PlansController extends Controller
{
    //
    public function create()
    {
        # code...
        return view('architect.plan.create');
    }

    public function store(Request $request)
    {
        # code...

        $plan = new Plan;

        if($request->hasFile('plan_files')){
            //Getting file name with extension
            $fileNameWithExt = $request->file('plan_files')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('plan_files')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('plan_files')->storeAs('public/plan_attachments', $fileNameToStore);
            


        }
        else
        {
            $fileNameToStore = 'Null';
        }

        $plan->architect_id               = Auth::guard('architect')->user()->id;
        $plan->width                      = $request->input('width');
        $plan->depth                      = $request->input('depth');
        $plan->height                     = $request->input('height');
        $plan->storeys                    = $request->input('storeys');
        $plan->total_covered_area         = $request->input('total_covered_area');
        $plan->area                       = $request->input('area');
        $plan->car_porch                  = $request->input('car_porch');
        $plan->beds                       = $request->input('beds');
        $plan->drawing_rooms              = $request->input('drawing_rooms');
        $plan->lounges                    = $request->input('lounges');
        $plan->dinning_areas              = $request->input('dinning_areas');
        $plan->kitchens                   = $request->input('kitchens');
        $plan->s_kitchens                 = $request->input('s_kitchens');
        $plan->store_rooms                = $request->input('store_rooms');
        $plan->maid_rooms                 = $request->input('maid_rooms');
        $plan->laundary_rooms             = $request->input('laundary_rooms');
        $plan->terraces                   = $request->input('terraces');
        $plan->rooftops                   = $request->input('rooftops');
        $plan->corner_plot                = $request->input('corner_plot');
        $plan->plan_name                  = $request->input('plan_name');
        $plan->plan_summary               = $request->input('plan_summary');
        $plan->plan_description           = $request->input('plan_description');
        $plan->plan_set_information       = $request->input('plan_set_information');
        $plan->plan_files                 = $fileNameToStore;
        $plan->plan_status                = 0;
        $plan->price                      = $request->input('price');

        $plan->save();
        if($plan->save()){
            $request->session()->flash('success', 'Plan Submitted for Approval');
        }
        else{
            $request->session()->flash('errors  ', 'Could not be submitted');
        }
        
        return redirect('/architect/my-plans');

       

    }

    public function myPlans()
    {
        # code...
        $plans = Plan::where('architect_id', Auth::guard('architect')->user()->id)->get();
        return view('architect.plan.myPlans',
    [
        'plans'=> $plans,
    ]);
    }

    public function single($id)
    {
        # code...
        $plan = Plan::find($id);
        return view('architect.plan.viewPlan', 
    [
        'plan'  => $plan,
    ]);
    }
}
