<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $casts = [
    	'idP' => 'string'
    ];
}
