<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    
    public function ailment() {
        return $this->belongsTo(Ailment::class);
    }
    
    public function answers() {
        return $this->BelongsTo(Question::class);
    }
}
