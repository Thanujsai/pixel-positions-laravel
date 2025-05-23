<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => ['required','confirmed', Password::min(6)],    
        ]);

        $employerAttributes = $request->validate([
            'employer' => 'required',
            'logo' => 'required',
        ]);

        $user = User::create($userAttributes);

        // dd($user);
        $logoPath = $request->logo->store('logos');//images are stored in storage/app/public/logos

        // dd($user);
        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Account created successfully.');
    }
}
