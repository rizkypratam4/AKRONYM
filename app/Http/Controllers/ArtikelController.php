<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Game;

class ArtikelController extends Controller
{
    public function index() {
    
        $title = '';
        if(request('game')){
            $game = Game::firstWhere('slug', request('game'));
            $title = $game->name;
        }
        return view('artikel', [
            "title" => "Artikel " . $title,
            "active" => 'artikels',
            "artikels" => Artikel::latest()->filter(request(['search', 'game']))->paginate(5)->withQueryString(),
            "games" => Game::all()
        ]);
    }

    public function show(Artikel $artikel){
        if (!empty($artikel)) { 
            $title = $artikel["title"];
            
            return view('artikel_detail', [
                "title" => $title,
                "active" => 'artikels',
                "artikel" => $artikel
            ]);
        } else {
            // Handle jika data artikel tidak ditemukan
            return view('artikel_not_found', [
                "title" => "artikel Tidak Ditemukan"
            ]);
        }
    }
}
