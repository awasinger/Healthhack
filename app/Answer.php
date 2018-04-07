<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question() {
        return $this->BelongsTo(Question::class);
    }
    
    public function checkup() {
        return $this->BelongsTo(Checkup::class);
    }
}
