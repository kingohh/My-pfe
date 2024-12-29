<?php

namespace App\Models;

use App\Models\Matche;
use App\Models\Statistique;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public function matche(){
        return $this->belongsTo(Matche::class);
    }
}
