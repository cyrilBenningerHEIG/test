<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vin extends Model
{
    public function appel() {
        return $this->belongsTo('App\appel');
    }

    public function frmt() {
        return $this->belongsTo('App\frmt');
    }

    public function regn() {
        return $this->belongsTo('App\regn');
    }

    public function prix() {
        return $this->belongsTo('App\prix');
    }

    public function condi() {
        return $this->belongsTo('App\condi');
    }

    public function produ() {
        return $this->belongsTo('App\produ');
    }

    public function comps() {
        return $this->hasMany('App\comp');
    }

    public function types() {
        return $this->belongsToMany('App\type');
    }

    public function wlists() {
        return $this->belongsToMany('App\wlist');
    }

    public function comms() {
        return $this->hasMany('App\comm');
    }

    public function detcmds() {
        return $this->hasMany('App\detcmd');
    }


    
}
