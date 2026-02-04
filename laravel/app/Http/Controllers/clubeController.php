<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clubeController extends Controller
{
    public function handle(Request $request)
    {

        if($_POST['registar'] == true)
        {
            $resp = $this->log->registaUser($request->input('username'),$request->input('password'),$request->input('tpUser'));
            echo($resp);
        }

        
    }
}