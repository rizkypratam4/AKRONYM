<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        $user = Auth::user();
        return view('profiles.main', [
            'title' => 'Profile',
            'user' => $user,
            'kota' => Regency::all(),
            'provinsi' => Province::all()
        ]);
    }

    public function show_edit()
    {
        $user = Auth::user();
        return view('profiles.edit', [
            'title' => 'Edit profile',
            'user' => $user,
            'kota' => Regency::all(),
            'provinsi' => Province::all()
        ]);

    }

    public function editLogo(Request $request) {
        $request->validate([
            'logo_team' => 'image|mimes:jpeg,png,jpg|max:1024',
        ]);
    
        $user = auth()->user();
    
        // Menghapus foto lama jika ada
        if ($user->logo_team) {
            Storage::delete($user->logo_team); // Hapus foto lama dari storage
        }
    
        // Jika file logo_team ada dalam request, simpan ke dalam folder 'logo-images'
        if ($request->file('logo_team')) {
            $user->logo_team = $request->file('logo_team')->store('logo-images', 'public');
            $user->save();
        }
    
        return redirect()->back()->with('success', 'Logo berhasil diubah');
    }
    
    public function editProfile(Request $request) {
        $validatedData = $request->validate([
            'team_name' => 'required|string|max:255',
            'city' => 'required|string',
            'province' => 'required|string',
            'bio' => 'required|max:500'
        ]);
    
        $user = auth()->user();
    
        // Memperbarui data profil pengguna
        $user->update([
            'team_name' => $validatedData['team_name'],
            'bio' => $validatedData['bio'],
            'city'=> $validatedData['city'],
            'province' => $validatedData['province']
        ]);
    
        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }
    
    public function editProfileOrLogo(Request $request) {
        $formType = $request->input('form_type');
    
        if ($formType === 'logo') {
            return $this->editLogo($request);
        } elseif ($formType === 'profile') {
            return $this->editProfile($request);
        }
    
        // Jika nilai 'form_type' tidak valid, tindakan apa yang ingin Anda lakukan?
        return redirect()->back()->with('error', 'Terjadi kesalahan.');
    }
    
    

   
}
