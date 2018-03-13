<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    public function materiels(){
        return $this->belongsToMany(Materiels::class, 'reservations_materiels', 'reservations_id', 'materiels_id');
    }
}
