<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponseController extends Controller
{
    //

    public function __invoke(Request $request)
    {
        $answers = json_decode($request['answers'], true);
        foreach($answers as $questionId => $answer){
            $question = Question::find($questionId);
            $option = Option::where('text', $answer)->first();
            $question->responses()->create([
                'option_id' => $option->id,
                'client_id' => Auth::user()->client->id
            ]);
        }

    }

}
