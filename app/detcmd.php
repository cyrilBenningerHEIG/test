<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detcmd extends Model
{
    public function cmd() {
        return $this->belongsTo('App\cmd');
    }

    public function vin() {
        return $this->belongsTo('App\vin');
    }
}
