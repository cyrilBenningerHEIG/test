<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comp extends Model
{
    public function cepag() {
        return $this->belongsTo('App\cepag');
    }
    public function vins() {
        return $this->hasMany('App\vin');
    }
}
