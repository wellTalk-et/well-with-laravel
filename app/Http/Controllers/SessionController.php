<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

use Laravel\Passport\Passport;
 


class SessionController extends Controller
{
    //
    public function create(){
        Passport::ignoreRoutes();
        return view('auth.login');
    }

    public function store(Request $request){

        Passport::ignoreRoutes();
        $attributes = $request->validate([
            'email_username' => ['required', 'min:4'],
            'password' => ['required', Password::min(6)]

        ]);

        if( 
            !Auth::attempt([
                'email' => $attributes['email_username'],
                'password' => $attributes['password']
            ]) &&
            !Auth::attempt([
                'username' => $attributes['email_username'],
                'password' => $attributes['password']
                ]) 
        ){
            throw ValidationException
            ::withMessages([
                'email_username' => 'invalid credentials'
            ]);

        }
        $request->session()->regenerate();

        return redirect('/questions');
    }

    public function destroy(){
        Auth::logout();
        return redirect('/');
    }



}
