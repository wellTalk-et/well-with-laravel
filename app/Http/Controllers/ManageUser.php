<?php

namespace App\Http\Controllers;

use App\Events\UserLeft;
use App\Models\Consultation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageUser extends Controller
{

    public function userLeft(Request $request) 
    {
        // post request, this will broadcast
        $userLeftUid = $request['user_uid'];
        $consultationId = $request['consultation_id'];
        UserLeft::dispatch(Auth::user(), $userLeftUid);
        User::where('id', Auth::user()->id)->update(['status' => "left " . $consultationId]);

        return response()->json(['success' => true, 'message' => 'User left the meeting']);

    }

    public function isUserLeft(Consultation $consultation) 
    {
        // Find the user with status false related to the specific consultation
        $user = User::where('status', "left ".$consultation->id)->first();

        User::where()->update(['status' => "not assigned"]);

        
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => $user->username . " has left the meeting.",
                'user' => $user
            ]);
        }


    
        return response()->json([
            'success' => false,
            'message' => 'No user has left the meeting.'
        ]);
    }
    
}
