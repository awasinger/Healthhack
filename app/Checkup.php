<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    public function user() {
        return $this->BelongsTo(User::class);
    }
    
    public function answers() {
        return $this->hasMany(Answer::class);
    }
}
