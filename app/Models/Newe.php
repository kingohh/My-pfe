<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newe extends Model
{
    public function equipes(){
        return $this->belongsToMany(Equipe::class, 'equipes_news');
    }
}
