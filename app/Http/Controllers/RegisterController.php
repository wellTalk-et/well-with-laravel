<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
     $attribute = $request->validate([
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email', 'max:254', 'unique:users,email' ],
        'password' => ['required', Password::min(6)],
        "country" => ['required'],
      ]);
        
      if(!$request['checkbox']){
        throw ValidationException::withMessages(['checkbox' => 'you must agree for our terms and agreements']);
    }
    $user = User::create($attribute);
        // login

    Auth::login($user);
        //redirect
    redirect('/questions?q=1');
    }

}
