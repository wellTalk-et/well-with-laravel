<?php

use App\Http\Controllers\ManageChat;
use App\Http\Controllers\ManageUser;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\VideoSessionController;
use App\Models\Question;
use Illuminate\Support\Facades\Route;


Route::view('/', 'index')->name('index');


Route::get('/questions', [QuestionController::class, 'index'])->middleware('auth');
Route::post('/questions',[QuestionController::class, 'store'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/plan', [PlanController::class, 'index'])->middleware('auth');
Route::get('/plan/{plan}/review', [PlanController::class, 'show'])->middleware('auth');

Route::get('/plan/{plan}/payment', [PaymentController::class, 'create'])->middleware('auth');
Route::post('/plan/{plan}/payment', [PaymentController::class, 'store'])->middleware('auth');

Route::get('/session/{consultation}', [VideoSessionController::class, 'index'])->middleware('auth');

Route::get('/session/{consultation}/user-left', [ManageUser::class, 'isUserLeft']);
Route::post('/session/{consultation}/user-left', [ManageUser::class, 'userLeft']);


Route::get('/session/{consultation}/chat-messages', [ManageChat::class, 'recieveChatMessage']);
Route::post('/session/{consultation}/chat-messages', [ManageChat::class, 'sendChatMessage']);

