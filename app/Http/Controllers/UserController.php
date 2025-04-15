<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //show registration form
    public function create($value='')
    {
        return view('users.register');
    }

    //create new user
    public function store(Request $request)
    {
        $form = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:3'
        ]);

        //Hash Password
        $form['password'] = bcrypt($form['password']);

        //create user
        $user = User::create($form);

        //login
        auth()->login($user);

        return redirect('/')->with('message', 'user created and logged in');

    }

    //Logout user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'you have logged out');
    }

    //show loging form
    public function login()
    {
        return view('users.login');
    }

    //Authenticate user
    public function authenticate(Request $request)
    {
        $form = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);


        if (auth()->attempt($form)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'you are logged in');
        }

        return back()->withErrors(['email' => 'invalid credentials'])->onlyInput('email');

    }
}
