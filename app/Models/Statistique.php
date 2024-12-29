<?php

namespace App\Models;

use App\Models\Equipe;
use App\Models\Matche;
use App\Models\joueur;
use Illuminate\Database\Eloquent\Model;

class Statistique extends Model
{
    public function joueur()
    {
        return $this->belongsTo(joueur::class, 'joueur_id');
    }
    public function match()
    {
        return $this->belongsTo(Matche::class, 'match_id');
    }
    public function equipe()
    {
        return $this->hasOneThrough(Equipe::class, Joueur::class, 'id', 'id', 'joueur_id', 'equipe_id');
    }
    


}
