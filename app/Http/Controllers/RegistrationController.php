<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use App\User;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {





        //save

       $user = User::create(([
           'name' => request('name'),
           'email' => request('email'),
           'password' => bcrypt(request('password'))]));

        //sign in

        auth()->login($user);
        \Mail::to($user)->send(new Welcome($user));

        session()->flash('message', 'Thanks so much for signing up');

        //redirect
        return redirect()->home();
    }
}
