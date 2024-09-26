<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function specializations(){
        return $this->hasMany(Specialization::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    
    public function consultations(){
        return $this->hasMany(Consultation::class);
    }

}
