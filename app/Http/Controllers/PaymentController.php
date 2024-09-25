<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

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
        // attach that plan for the user
        // create the first consultation for the user
        // send that via email with queue
        // show the confirmation message
        // return redirect to the video session 
        return redirect('/plan/session');
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
