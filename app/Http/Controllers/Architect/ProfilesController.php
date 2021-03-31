<?php

namespace App\Http\Controllers\Architect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Architect;
use App\Models\ArchitectProfile as Profile;
use Auth;

class ProfilesController extends Controller
{
    public function create()
    {
        $architectId = Auth::guard('architect')->user()->id;
        $profile = Profile::where('architect_id', $architectId)->first();

        return view('architect.profile.create', [
            'profile' => $profile
        ]);
    }

    public function store(Request $request)
    {
        $profile = new Profile;

        if ($request->hasFile('logo')) {
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('logo')->storeAs('public/company_logos', $fileNameToStore);
        } else {
            $fileNameToStore = 'Null';
        }

        $profile->architect_id = Auth::guard('architect')->user()->id;
        $profile->company_name = $request->input('company_name');
        $profile->location = $request->input('location');
        $profile->company_exp = $request->input('company_exp');
        $profile->company_incorp = $request->input('company_incorp');
        $profile->address = $request->input('address');
        $profile->website = $request->input('website');
        $profile->logo = $fileNameToStore;
        $profile->description = $request->input('description');
        $profile->status = 1;
        $profile->save();
        
        if ($profile->save()) {
            $request->session()->flash('success', 'Profile Submitted for Approval');
        } else {
            $request->session()->flash('errors  ', 'Could not be submitted');
        }

        return back();
    }
}
