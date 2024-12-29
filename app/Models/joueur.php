<?php

namespace App\Models;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Model;

class joueur extends Model
{
    public function equipes(){
        return $this->belongsTo(Equipe::class);
    }
    public function statitiques(){
        return $this->hasMany(Statistique::class);
    }
}
