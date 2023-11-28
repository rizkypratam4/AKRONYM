<?php

namespace App\Http\Controllers;

use App\Models\Turnamen;
use App\Http\Requests\StoreTurnamenRequest;
use App\Http\Requests\UpdateTurnamenRequest;

class TurnamenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('turnamen', [
            "title" => "Turnamen",
            "turnamens" => Turnamen::all()
        ]);
    }

    public function show(Turnamen $turnamen) {
    
        if (!empty($turnamen)) { 
            $title = $turnamen["organizer"];
            
            return view('turnamen_detail', [
                "title" => $title,
                "turnamens" => $turnamen
            ]);
        } else {
            return view('turnamen_not_found', [
                "title" => "Turnamen Tidak Ditemukan"
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTurnamenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Turnamen $turnamen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTurnamenRequest $request, Turnamen $turnamen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Turnamen $turnamen)
    {
        //
    }
}
