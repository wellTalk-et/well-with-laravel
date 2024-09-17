<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

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
}
