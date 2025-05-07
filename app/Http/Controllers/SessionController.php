<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store() {
        //validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],//the field here is the name of the input field, example 'email' here is the name of the input field of the view <x-forms.input name="email" label="Email" required />

            'password' => ['required'],//similar to the above <x-forms.input name="password" label="Password" type="password" required />
        ]);

        //attempt to login
        if(!Auth::attempt($attributes)) {
            //if login fails, redirect back with errors
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials do not match.',
            ]);
        }

        //regenrate the session token
        request()->session()->regenerate();
        
        //redirect to the jobs page
        return redirect('/');
    }

    public function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
