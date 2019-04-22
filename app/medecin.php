<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medecin extends Model
{
    //
    public function user() {
        return $this->morphOne('App\User', 'userable');
    }

    public function consultations() {
        return $this->hasMany('App\Consultation');
    }
}
