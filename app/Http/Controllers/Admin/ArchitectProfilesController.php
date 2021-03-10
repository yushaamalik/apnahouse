<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Architect;
use App\Models\ArchitectProfile;
use App\Models\Admin;


use Auth;


class ArchitectProfilesController extends Controller
{
    //

    public function allProfiles()
    {
        # code...
        $profiles = ArchitectProfile::orderBy('id', 'desc')->get();

        return view('admin.architects.allProfiles', 
        [
            'profiles' => $profiles,
        ]);
    }
    public function pendingProfiles()
    {
        # code...
        $pendingProfiles = ArchitectProfile::where('status', 1)->get();
        // echo $pendingProfiles->id;
        // exit();
        return view('admin.architects.pendingProfiles', 
        [
            'pendingProfiles' => $pendingProfiles,
        ]);
    }
    public function single($id)
    {
        $architect = Architect::find($id);

        return view('admin.architects.architectProfile', [
            'architect' => $architect,
        ]);
    }

    public function approveProfile($id)
    {
        # code...
        $profile = ArchitectProfile::where('id', $id)->update(
            [
                'status' => 2,
            ]
            );

            return redirect('admin/all-profiles');
    }

    public function rejectProfile($id)
    {
        # code...
        $profile = ArchitectProfile::where('id', $id)->update(
            [
                'status' => 3,
            ]
            );

            return redirect('admin/all-profiles');
    }
}
