<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

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

    public function upload_logo(Request $request) {
        $request->validate([
            'logo_team' => 'image|mimes:jpeg,png,jpg|max:1024',
        ]);
    
        $user = auth()->user();

        if ($user->logo_team) {
            Storage::delete($user->logo_team);
        }
    
        if ($request->file('logo_team')) {
            $user->logo_team = $request->file('logo_team')->store('logo-images', 'public');
            $request->user()->save();
        }
    
        return redirect()->back()->with('success', 'Logo berhasil diubah');
    }

    public function edit_akun(Request $request) {
        $validatedData = $request->validate([
            'city' => 'required|string',
            'province' => 'required|string',
        ]);

        $request->user()->fill([
            'city'=> $validatedData['city'],
            'province' => $validatedData['province']
        ])->update();
    
        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }

    public function ganti_password(Request $request) : RedirectResponse {

        $request->validate([
            'new_password' => 'required|min:6',
            'confirmed_password' => 'required|same:new_password',
        ], [
            'confirmed_password.same' => 'Konfirmasi password baru harus sama dengan password baru.',
        ]);

        $request->user()->fill([
            'password' => bcrypt($request->new_password)
        ])->save();

        return redirect()->back()->with('success', 'Password berhasil diperbarui');

    }

    public function create_team(){
        
    }

    public function editAkunOrLogo(Request $request) {
        $formType = $request->input('form_type');
        if ($formType === 'logo') {
            return $this->upload_logo($request);
        } elseif ($formType === 'akun') {
            return $this->edit_akun($request);
        } elseif ($formType === 'gantipassword') {
            return $this->ganti_password($request);
        }
        return redirect()->back()->with('error', 'Terjadi kesalahan.');
    }
   
}
