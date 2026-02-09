<?php

use App\Models\Clube;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubeController;
use App\Http\Controllers\UtilizadorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $clubes = [];
    if(auth()->check()){
        $clubes = Clube::all();
    }
    
    return view('home', ['clube' => $clubes]);
});

Route::post('/registar', [UtilizadorController::class, 'registar']);
Route::post('/logout', [UtilizadorController::class, 'logout']);
Route::post('/login', [UtilizadorController::class, 'login']);

//Clubes
Route::post('/criarClube', [ClubeController::class, 'criarClube']);
Route::get('/editarClube/{clube}', [ClubeController::class, 'mostrarEditScreen']);
Route::put('/editarClube/{clube}', [ClubeController::class, 'update']);
Route::delete('/eliminarClube/{clube}', [ClubeController::class, 'eliminarClube']);