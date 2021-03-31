<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Plan;
use App\Models\User;
use App\Models\Message;
use App\Models\Architect;
use Illuminate\Http\Request;
use App\Models\Modification;

class ModificationsController extends Controller
{

    public function view($planId, $architectId, $modificationId)
    {
        $plan = Plan::find($planId);
        $architect = Architect::find($architectId);
        $messages = Message::where('sender_id', Auth::guard('web')->user()->id)->where('receiver_id', $architectId)->get();

        if (Auth::check()) {
            return view('user.modification.index', [
                'plan'          => $plan,
                'architect'     => $architect,
                'planId'        => $planId,
                'architectId'   => $architectId,
                'messages'      => $messages,
                'modificationId' => $modificationId,
            ]);
        } else {
            return back();
        }
    }

    public function store(Request $request, $planId, $architectId)
    {
        if (Auth::check()) {

            $modificationRequest = Modification::create([
                'user_id'           => Auth::guard('web')->user()->id,
                'architect_id'      => $request->input('architectId'),
                'plan_id'           => $request->input('planId'),
                'title'             => $request->input('title'),
                'status'            => 1,
            ]);

            // return $modificationRequest;
            $modificationRequestId = $modificationRequest->id;

            $plan = Plan::find($planId);
            $architect = Architect::find($architectId);
            $messages = Message::where('receiver_id', $architectId)->where('sender_id', Auth::guard('web')->user()->id)->get();
            $dataArray = array(
                'plan'                          => $plan,
                'architect'                     => $architect,
                'planId'                        => $planId,
                'architectId'                   => $architectId,
                'modificationRequest'           => $modificationRequest,
                'messages'                      => $messages,
            );

            return redirect('modification-request/' . $planId . '/' . $architectId . '/' . $modificationRequestId)->with($dataArray);
        } else {
            return redirect('/login');
        }
    }
}
