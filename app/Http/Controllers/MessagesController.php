<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plan;
use App\Models\Architect;
use App\Models\Message;

class MessagesController extends Controller
{
    //
    public function send(Request $request)
    {
        $message = new Message;

        $message->modification_id = $request->input('modificationRequestId');
        $message->sender_id = auth('web')->user()->id;
        $message->receiver_id = $request->input('receiver_id');
        $message->plan_id = $request->input('plan_id');
        $message->message_file = 'Testing File';
        $message->body  = $request->input('body');

        $message->save();
        return back();
    }
}
