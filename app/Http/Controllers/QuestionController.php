<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;


class QuestionController extends Controller
{
    //

    public function index(){
            $questions = Question::with('options')
                        ->orderby('id', 'desc')
                        ->take(10)
                        ->get()
                        ->map(function ($question) {

                            return [
                                'id' => $question->id,
                                'text' => $question->text,
                                'type' =>$question->type,
                                'options' => $question->options->map(function ($option) {
                                    return [
                                        'id' => $option->id,
                                        'text' => $option->text,
                            ];
                    }),
                ];
            });
            return view('question', ['questions' => $questions]);
    }

    public function store(Request $request){
        $answers = json_decode($request['answers'], true);
        foreach($answers as $questionId => $answer){
            $question = Question::find($questionId);
            $option = Option::where('text', $answer)->first();
            $question->responses()->create([
                'option_id' => $option->id,
                'client_id' => Auth::user()->client->id
            ]);
        }

        return redirect('/plan');
    }
}
