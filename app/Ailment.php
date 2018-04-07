<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ailment extends Model
{
    public function patients() {
        return $this->belongsTo(Patient::class);
    }
}
