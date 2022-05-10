<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
       $attributes = request()->validate([
           'email' => 'required|exists:users,email',
           'password' => 'required'
       ]) ;

       if (! auth()->attempt($attributes)) {
        throw ValidationException::withMessages([
        'email' => 'Your provided credentialks could not be verified'
       ]);
       }

        session()->regenerate();
        return redirect('/')->with('success','Welcome Back!!');      

    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success','Bye bbbtch');
    }
}
