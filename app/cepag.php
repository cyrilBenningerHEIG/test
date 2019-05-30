<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cepag extends Model
{
    public function comps() {
        return $this->hasMany('App\comp');
    }
}
