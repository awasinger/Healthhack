<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ailment extends Model
{
    public function users() {
        return $this->belongsToMany(User::class);
    }
    
    public function questions() {
        return $this->hasMany(Question::class);
    }
}
