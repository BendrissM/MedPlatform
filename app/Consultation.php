<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    public function medecin() {
        return $this->belongsTo('App\Medecin');
    }

    public function ordonnance() {
        return $this->hasOne('App\Ordonnance');
    }
}
