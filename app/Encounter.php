<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'encounters_actors';

    public function encounterInstance(){
        return $this->hasMany('App\EncounterActor', 'encounter_id');
    }
}
