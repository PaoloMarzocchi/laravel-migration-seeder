<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Train::all());
        $now = now()->toDateString();


        /* dd($now); */
        $trains = Train::where('departure_date', $now)->get();
        //dd($trains);
        return view('guests.trains', compact('trains'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        //
    }
}
