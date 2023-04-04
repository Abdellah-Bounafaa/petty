<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MembreController extends Controller
{
    public function create()
    {
        return view('authentification.register');
    }
    public function store(Request $request)
    {
        $FormValidate =  $request->validate([
            'country' => 'required|alpha',
            'first_name' => 'required|alpha|max:255',
            'last_name' => 'required|alpha|max:255',
            'phone_number' => 'required|numeric|digits_between:8,15',
            'email' => 'required|email|unique:membres,email|max:255',
            'password' => 'required|min:8|max:255|confirmed',
        ]);
        //hash password
        $FormValidate['password'] = bcrypt($FormValidate['password']);
        $membre = Membre::create($FormValidate);
        auth()->login($membre);
        return redirect('/')->with('message', "user created successfully");
    }
    public function logout(Request $req)
    {
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/')->with('message', "You have been logged out");
    }
    public function login()
    {
        return view('authentification.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = Membre::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'email' => 'The provided credentials are incorrect.',
            ]);
        }

        Auth::login($user);

        $request->session()->regenerate();

        //dd($request->session()->all());
        return redirect()->intended('/');
    }
}