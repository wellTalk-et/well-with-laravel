<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('plan', ['plans'=> Plan::latest()->take(2)->get()]);
    }
    public function create(){

    }

    public function store(){

    }

    public function show(Plan $plan)
    {
        return view('review', ['plan'=>$plan]);
    }

}
