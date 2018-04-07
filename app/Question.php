<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function ailment() {
        return $this->belongsTo(Ailment::class);
    }
}