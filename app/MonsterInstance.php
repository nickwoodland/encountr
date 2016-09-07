<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonsterInstance extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monster_instances';

    public function monster(){
        return $this->belongsTo('App\Monster');
    }

    public function encounter()
    {
        return $this->morphMany('App\EncounterActor', 'actor');
    }
}
