<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function doctor(){
        return $this->hasOne(Doctor::class);
    }

    public function client(){
        return $this->hasOne(Client::class);
    }
    
    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function canJoinConsultation($consultationId){
        // get the client
        $client = $this->client;
        $doctor = $this->doctor;
        if($client)
            // check if the client have that consultation
        return $client->consultations()->where('id', $consultationId)->exists();
        else
            // check if the doctor have that consultation
            return $doctor->consultations()->where('id', $consultationId)->exists();
        
        // return the result
        return false;
    }

}
