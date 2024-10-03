<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

use Laravel\Passport\Passport;
 


class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Passport::ignoreRoutes();
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Passport::ignoreRoutes();
        // validate
        $attribute = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254', 'unique:users,email' ],
            'password' => ['required', Password::min(8)],
            "country" => ['required'],
        ]);
            
        if(!$request['checkbox']){
            throw ValidationException::withMessages(['checkbox' => 'you must agree for our terms and agreements']);
        }
        $user = User::create($attribute);

        if($request['role'] == 'mentor'){
            $user->doctor()->create();
        }else{
            $user->client()->create();
        }

        Auth::login($user);
        return redirect('/questions');
}

}
