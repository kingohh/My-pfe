<?php

namespace App\Models;

use App\Models\Equipe;
use App\Models\Resume;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    public function equipes(){
        return $this->belongsToMany(Equipe::class,'matches_equipes');
    }
    public function resume(){
        return $this->hasOne(Resume::class,'matche_id');
    }
    public function statistiques(){
        return $this->hasMany(Statistique::class, 'match_id');
    }
}
