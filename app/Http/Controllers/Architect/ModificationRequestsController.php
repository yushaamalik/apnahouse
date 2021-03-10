<?php

namespace App\Http\Controllers\Architect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModificationRequest;
use App\Models\Message;
use App\Models\Architect;
use App\Models\User;
use App\Models\Plan;
use Auth;



class ModificationRequestsController extends Controller
{
    //
    public function index()
    {
        # code...
        $modificationRequests = ModificationRequest::where('architect_id', Auth::guard('architect')->user()->id)->get();
        return view('architect.modification.index',
        [
            'modificationRequests'  => $modificationRequests,
        ]);
    }

    public function view($userId, $planId, $modificationId)
    {
        # code...
        $modificationRequest = ModificationRequest::find($modificationId);
        $messages            = Message::where('modification_request_id', $modificationId)->get();

        return view('architect.modification.view',
        [
            'messages'                  => $messages,
            'modificationRequest'       => $modificationRequest,
            'userId'                    => $userId,
            'planId'                    => $planId,
            'modificationId'            => $modificationId,
        ]);

    }
}
