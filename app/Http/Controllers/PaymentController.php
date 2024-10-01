<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Plan $plan)
    {

        return view('payment', ['plan'=> $plan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Plan $plan)
    {
        //
        // dd($plan);
        // validate the request
        // the route must have the middleware to auth
        // create the plan for the user
        $client = Auth::user()->client;
        $plan = Plan::first();
        $client->plans()->attach($plan);
        $consultation = Consultation::create([
            'title'=> 'consultation for '. Auth::user()->username,
            'plan_id' => $plan->id,
            'doctor_id' => Doctor::first()->id,
            'client_id'=> $client->id
        ]);

        // create the first consultation for the user
        // send that via email with queue
        // show the confirmation message
        // return redirect to the video session 
        return redirect('/session/'. $consultation->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
