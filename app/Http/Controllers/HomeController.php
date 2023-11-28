<?php

namespace App\Http\Controllers;

use App\Models\Turnamen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    public function index(){
        return view('home',[
            'title' => 'Home'
        ]); 
    }


    public function show_all_turnamens(){
        return view('home', [
            'title' => 'Home',
            "turnamens" => Turnamen::all()
        ]);
    }

    public function show_detail_turnamen(Turnamen $turnamen) {
    
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


}
