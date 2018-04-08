<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];
    public $timestamps = false;    
    
    public function question() {
        return $this->BelongsTo(Question::class);
    }
    
    public function checkup() {
        return $this->BelongsTo(Checkup::class);
    }
}
