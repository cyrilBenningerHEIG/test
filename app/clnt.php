<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clnt extends Model
{
    protected $fillable=['email', 'nom', 'prenom', 'dateNaissance', 'sexe', 'motDePasse'];

    protected $hidden = ['motDePasse'];

    public function adress() {
        return $this->hasMany('App\adres');
    }

    public function cmds() {
        return $this->hasMany('App\cmd');
    }

    public function comms() {
        return $this->hasMany('App\comm');
    }

    public function wlist() {
        return $this->hasOne('App\wlist');
    }
}
