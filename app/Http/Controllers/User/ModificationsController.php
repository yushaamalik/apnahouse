<?php

namespace App\Http\Controllers\User;

use App\Models\Plan;
use App\Models\User;
use App\Models\Message;
use App\Models\Architect;
use App\Models\Modification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModificationsController extends Controller
{
    public function view($planId, $architectId, $modificationId)
    {
        $plan = Plan::find($planId);
        $architect = Architect::find($architectId);
        $messages = Message::where('sender_id', auth('web')->id())
            ->where('receiver_id', $architectId)->get();

        return view('user.modification.index', [
            'plan'          => $plan,
            'architect'     => $architect,
            'planId'        => $planId,
            'architectId'   => $architectId,
            'messages'      => $messages,
            'modificationId' => $modificationId,
        ]);
    }

    public function store(Request $request, $planId, $architectId)
    {
        $modification = Modification::create([
            'title'          => $request->input('title'),
            'user_id'        => auth('web')->id(),
            'plan_id'        => $request->input('planId'),
            'architect_id'   => $request->input('architectId'),
            'status'         => 1,
        ]);

        $messages = Message::where('receiver_id', $architectId)
            ->where('sender_id', auth('web')->id())->get();

        return redirect('modification-request/' . $planId . '/' . $architectId . '/' . $$modification->id);
    }
}
