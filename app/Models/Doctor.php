<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $append = ['count_todays_consultation'];

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
    

    public function getNextConsultationAttribute() {
        return $this->appointments()
                    ->where('appointment_datetime', '>', Carbon::now())
                    ->orderBy('appointment_datetime', 'desc')
                    ->first();
    }

    public function getCountTodaysConsultationAttribute(){
        return $this->appointments()->count();
    }

}
