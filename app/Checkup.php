<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    protected $fillable = ['user_id'];
    
    public function user() {
        return $this->belongsTo(Patient::class);
    }
    
    public function answers() {
        return $this->hasMany(Answer::class);
    }
}
