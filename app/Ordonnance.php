<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    //
    public function consultation() {
        return $this->belongsTo('App\Consultation');
    }
}
