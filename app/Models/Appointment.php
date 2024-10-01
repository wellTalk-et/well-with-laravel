<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Comment\Doc;

class Appointment extends Model
{
    use HasFactory;

    protected $appends = ['formatted_created_at', 'all_users'];

    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('g:i A F jS');
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function getAllUsersAttribute(){
        $users = [];
        if($this->client){
            array_push($users, $this->client);
        }

        if($this->doctor){
            array_push($users, $this->doctor);
        }

        return $users;

    }
}
