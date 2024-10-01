<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function option(string $text){
        $option = Option::firstOrCreate(['text'=>$text]);
        $this->options()->attach($option);
    }

    public function options(){
        return $this->belongsToMany(Option::class);
    }

    public function responses(){
        return $this->hasMany(Response::class);
    }
}
