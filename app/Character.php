<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function encounter()
    {
        return $this->morphMany('App\EncounterActor', 'actor');
    }
}
