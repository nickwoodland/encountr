<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncounterActor extends Model
{
        /**
     * Get the post that owns the comment.
     */
    public function encounter()
    {
        return $this->belongsTo('App\Encounter');
    }

    public function actor()
    {
        return $this->morphTo();
    }
}
