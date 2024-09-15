<?php

use App\Http\Controllers\RegisterController;
use App\Models\Question;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/questions', function(){
    $questions = Question::with('options')->get()->map(function ($question) {
        return [
            'id' => $question->id,
            'text' => $question->text,
            'options' => $question->options->map(function ($option) {
                return [
                    'id' => $option->id,
                    'text' => $option->text,
                ];
            }),
        ];
    });
    return view('question', ['questions' => $questions]);
});



Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

