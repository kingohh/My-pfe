<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classement extends Model
{
    public function equipe(){
        return $this->belongsTo(Equipe::class);
    }
}
