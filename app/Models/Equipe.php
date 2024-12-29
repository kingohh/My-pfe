<?php

namespace App\Models;

use App\Models\Newe;
use App\Models\Matche;
use App\Models\Classement;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public function matchs(){
        return $this->belongsToMany(Matche::class,'matches_equipes');
    }
    public function classement(){
        return $this->hasMany(Classement::class);
    }
    public function joueurs(){
        return $this->hasMany(joueur::class);
    }
    public function news(){
        return $this->belongsToMany(Newe::class, 'equipes_news');
    }

}
