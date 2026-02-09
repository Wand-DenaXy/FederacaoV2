<?php

namespace App\Http\Controllers;

use App\Models\Clube;
use Illuminate\Http\Request;

class ClubeController extends Controller
{
public function eliminarClube(Clube $clube)
{
    if(auth()->check()){
        $clube->delete();  
    }

    return redirect('/');
}
    public function criarClube(Request $request)
    {
        $incomingFields = $request->validate([
            'nome' => ['required'],
            'email' => ['required'],
            'telefone' => ['required'],
            'localidade' => ['required']
        ]);

        $incomingFields['nome'] = strip_tags($incomingFields['nome']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['telefone'] = strip_tags($incomingFields['telefone']);
        $incomingFields['localidade'] = strip_tags($incomingFields['localidade']);
        
        Clube::create($incomingFields);
        return redirect('/');
    }
    public function mostrarEditScreen(Clube $clube)
    {
        return view('editarClube', ['clube' => $clube]);
    }
    public function update(Request $request, Clube $clube)
{
    if(!auth()->check()){
        return redirect('/');
    }

        $incomingFields = $request->validate([
            'nome' => ['required'],
            'email' => ['required'],
            'telefone' => ['required'],
            'localidade' => ['required']
        ]);

        $incomingFields['nome'] = strip_tags($incomingFields['nome']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['telefone'] = strip_tags($incomingFields['telefone']);
        $incomingFields['localidade'] = strip_tags($incomingFields['localidade']);
        
        $clube->update($incomingFields);
        return redirect('/');
}
}