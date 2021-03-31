<?php

namespace App\Http\Controllers\Architect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlansController extends Controller
{
    public function create()
    {
        return view('architect.plan.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('plan_files')) {
            $fileNameWithExt = $request->file('plan_files')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('plan_files')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('plan_files')->storeAs('public/plan_attachments', $fileNameToStore);
        } else {
            $fileNameToStore = null;
        }
        
        $plan = Plan::create([
            'architect_id'          => auth('architect')->id(),
            'width'                 => $request->width,
            'depth'                 => $request->depth,
            'height'                => $request->height,
            'storeys'               => $request->storeys,
            'total_covered_area'    => $request->total_covered_area,
            'area'                  => $request->area,
            'car_porch'             => $request->car_porch,
            'beds'                  => $request->beds,
            'drawing_rooms'         => $request->drawing_rooms,
            'lounges'               => $request->lounges,
            'dinning_areas'         => $request->dinning_areas,
            'kitchens'              => $request->kitchens,
            's_kitchens'            => $request->s_kitchens,
            'store_rooms'           => $request->store_rooms,
            'maid_rooms'            => $request->maid_rooms,
            'laundary_rooms'        => $request->laundary_rooms,
            'terraces'              => $request->terraces,
            'rooftops'              => $request->rooftops,
            'corner_plot'           => $request->corner_plot,
            'plan_name'             => $request->plan_name,
            'plan_summary'          => $request->plan_summary,
            'plan_description'      => $request->plan_description,
            'plan_set_information'  => $request->plan_set_information,
            'plan_files'            => $fileNameToStore,
            'plan_status'           => 0,
            'price'                 => $request->price,
        ]);

        if ($plan) $request->session()->flash('success', 'Plan Submitted for Approval');
        else $request->session()->flash('errors  ', 'Could not be submitted');

        return redirect()->route('architect.plan.all');
    }

    public function all()
    {
        return view('architect.plan.myPlans', [
            'plans' => Plan::where('architect_id', auth('architect')->id())->get()
        ]);
    }

    public function single($id)
    {
        $plan = Plan::find($id);
        return view('architect.plan.viewPlan', [
            'plan'  => $plan
        ]);
    }
}
