<?php

namespace App\Http\Controllers\Architect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modification;
use App\Models\Architect;
use App\Models\Message;
use App\Models\User;
use App\Models\Plan;
use Auth;

class ModificationsController extends Controller
{
    public function all()
    {
        return view('architect.modification.index', [
            'modifications' => Modification::where('architect_id', auth('architect')->id())->get()
        ]);
    }

    public function view($userId, $planId, $modificationId)
    {
        $modification = Modification::find($modificationId);
        $messages = Message::where('modification_id', $modificationId)->get();

        return view('architect.modification.view', [
            'userId'             => $userId,
            'planId'             => $planId,
            'messages'           => $messages,
            'modification'       => $modification,
            'modificationId'     => $modificationId,
        ]);
    }

}
