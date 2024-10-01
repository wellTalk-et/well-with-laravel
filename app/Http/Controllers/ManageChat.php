<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Consultation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ManageChat extends Controller
{
    //

    public function recieveChatMessage(){
        return response()->json([
            'success' => 'success'
        ]);
    }

    public function sendChatMessage(Request $request) : JsonResponse
    {
        // validate
        $attributes = $request->validate([
            'message' => ['required']
        ]);
        $user = User::find($request['user_id']);
        $consultation = Consultation::find($request['consultation_id']);
        $attributes['user_id'] = $user->id;
        $attributes['consultation_id'] = $consultation->id;
        // create message
        $message = Message::create($attributes);
        // dispatch
        // MessageSent::dispatch($consultation);
        MessageSent::dispatch($message);
        // return success message
        return response()->json(['message' => 'Message sent successfully', 'data' => $message]);

    }

}
