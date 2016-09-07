<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    public function monsterInstance(){
        return $this->hasMany('App\MonsterInstance', 'monster_id');
    }
}
