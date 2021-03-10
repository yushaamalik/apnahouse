<?php

namespace App\Http\Controllers\Architect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Architect;
use App\Models\ArchitectProfile;
use Auth;

class ArchitectProfilesController extends Controller
{
    //
    public function create()
    {
        # code...
        $architectId = Auth::guard('architect')->user()->id;
        // echo $architectId;
        $architectProfile = ArchitectProfile::where('architect_id', $architectId)->first();
        // echo $architectProfile->status;
        // exit();
        return view('architect.profile.create',
    [
        'architectProfile' => $architectProfile,
    ]);
    }

    public function store(Request $request)
    {
        # code...
        $architectProfile = new ArchitectProfile;
        if($request->hasFile('logo')){
            //Getting file name with extension
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('logo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('logo')->storeAs('public/company_logos', $fileNameToStore);
            


        }
        else
        {
            $fileNameToStore = 'Null';
        }
        $architectProfile->architect_id = Auth::guard('architect')->user()->id;
        $architectProfile->company_name = $request->input('company_name');
        $architectProfile->location = $request->input('location');
        $architectProfile->company_exp = $request->input('company_exp');
        $architectProfile->company_incorp = $request->input('company_incorp');
        $architectProfile->address = $request->input('address');
        $architectProfile->website = $request->input('website');
        $architectProfile->logo = $fileNameToStore;
        $architectProfile->description = $request->input('description');
        $architectProfile->status = 1;


        $architectProfile->save();
        if($architectProfile->save()){
            $request->session()->flash('success', 'Profile Submitted for Approval');
        }
        else{
            $request->session()->flash('errors  ', 'Could not be submitted');
        }

        return back();


    }
}
