<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materiels extends Model
{
    protected $fillable = [
        'libelle',
        'quantiteDispo'
    ];

    public function reservations(){
        return $this->belongsToMany(Reservations::class);
    }
}
