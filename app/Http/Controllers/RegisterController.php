<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register', [
            'title' => 'Register',
            
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'team_name'           => ['required', 'string', 'max:255'],
            'email'               => ['required', 'email:rfc,dns', 'unique:users'],
            'password'            => ['required', 'min:6', 'max:255'],
            'phone_number'        => ['required', 'string', 'regex:/^628\d{9,12}$/'],
        ], [
            'required' => 'Kolom :attribute wajib diisi.',
            'max' => 'Kolom :attribute tidak boleh melebihi :max karakter.',
            'min' => 'Kolom :attribute minimal harus :min karakter.',
            'unique' => ':attribute sudah digunakan.',
            'email' => 'Format :attribute tidak valid.',
            'string' => 'Kolom :attribute harus berupa string.',
            'regex' => 'Nomor Hp tidak valid. harus dimulai dengan "628"',
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);

        event(new Registered($user));
        Auth::login($user);

        return redirect('/email/verify');
        
    }
}   

