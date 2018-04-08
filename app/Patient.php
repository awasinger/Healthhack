<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'user_id', 'token'];
    
    public function doctor() {
        return $this->belongsTo(User::class);
    }
    
    public function ailments() {
        return $this->belongsToMany(Ailment::class);
    }
    
    public function checkups() {
        return $this->hasMany(Checkup::class);
    }
}
