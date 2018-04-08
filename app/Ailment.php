<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ailment extends Model
{
    public $timestamps = false;
    
    public function users() {
        return $this->belongsToMany(Patient::class);
    }
    
    public function questions() {
        return $this->hasMany(Question::class);
    }
}
