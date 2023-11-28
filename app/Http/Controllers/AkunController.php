<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;

class AkunController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('profiles.akun.akunsaya', [
            'title' => 'Profile',
            'user' => $user,
            'kota' => Regency::all(),
            'provinsi' => Province::all()
        ]);
    }

   
}
