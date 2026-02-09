<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UtilizadorController extends Controller
{
    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'usernameLogin'   => ['required', 'max:50'],
            'passwordLogin'   => ['required'],
        ]);

        $credentials = [
            'user'     => $incomingFields['usernameLogin'],
            'password' => $incomingFields['passwordLogin'],  
        ];

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
        }
        return redirect('/');

    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
        
    }
    public function registar(Request $request)
    {
        $incomingFields = $request->validate([
            'user' => ['required','max:255', Rule::unique('user', 'user')],
            'password' => ['required','max:255'],
            'idtpUser' => ['required']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);

        auth()->login($user);

        return redirect('/');
    }

}