<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turnamen;

class RoomController extends Controller
{
    // public function index() {
    //     return view('room.index', [
    //         "title" => "Turnamen",
    //         "turnamens" => Turnamen::all()
    //     ]);
    // }

    public function show(Turnamen $turnamen) {
    
        if (!empty($turnamen)) { 
            $title = 'Room ' . $turnamen["organizer"];
            
            return view('room.main', [
                "title" => $title,
                "turnamens" => $turnamen
            ]);
        } else {
            return view('turnamen_not_found', [
                "title" => "Turnamen Tidak Ditemukan"
            ]);
        }
    }



}
