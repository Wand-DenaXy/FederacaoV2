<?php

namespace App\Http\Controllers;

use App\Models\Utilizador;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UtilizadorController extends Controller
{
    public function registar(Request $request)
    {
         $incomingFields = $request->validate([
            'user' => ['required','max:255', Rule::unique('utilizador', 'user')],
            'pw' => ['required', 'email', Rule::unique('utilizador', 'email')],
            'idtpUser' => 'required','max:255'
        ]);
        $incomingFields['pw'] = bcrypt($incomingFields['pw']);
        $user = Utilizador::create($incomingFields);
        auth()->login($user);
        return redirect('/');
        
    }

}