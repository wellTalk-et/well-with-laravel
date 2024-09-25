<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public function clients(){
        return $this->belongsToMany(Client::class);
    }

    
    public function consultations(){
        return $this->hasMany(Consultation::class);
    }

}
