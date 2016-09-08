<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{

    protected $table = 'encounters';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    //protected $table = 'encounter_actors';

    public function encounterInstance(){
        return $this->hasMany('App\EncounterActor', 'encounter_id');
    }
}
