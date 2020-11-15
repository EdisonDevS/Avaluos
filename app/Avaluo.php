<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaluo extends Model
{
    //
    protected $fillable = [
        'user_id', 'custom_id', 'cliente_id', 'inmueble_id'
    ];
}
