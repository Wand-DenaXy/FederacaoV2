<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilizador extends Model
{
    protected $table = 'utilizador';

    protected $fillable = [
        'user',
        'pw',
        'idtpUser'
    ];

    public $timestamps = false;
}