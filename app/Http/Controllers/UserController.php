<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() {
        return view('users.register');
    }
    public function store(Request $request) {
        $fields = $request->validate(
            [
                'name' => ['required','min:3'],
                "email"=> ["required","email", Rule::unique('users','email')],
                "password" => ['required','confirmed','min:6']
            ]
        );
        $fields['password'] = bcrypt($fields['password']);

        $user = User::create($fields);
        /** @var \Illuminate\Contracts\Auth\StatefulGuard $auth */
        $auth = auth();
        $auth->login($user);

        return redirect('/')->with('message','User created successfully!');

    }
    public function logout(Request $request) {
        /** @var \Illuminate\Contracts\Auth\StatefulGuard $auth */
        $auth = auth();
        $auth->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','Logged out!');
    }
    public function login() {
        return view('users.login');
    }
    public function auth(Request $request) { 
        $fields = $request->validate(
            [
                "email"=> ["required","email", ],
                "password" => 'required',
            ]
        );
        
        if(auth()->attempt($fields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message','You are logged in!');
        }
        return back()->withErrors(['email' => 'Incoreect email or password'])->onlyInput('email');
    }
}
