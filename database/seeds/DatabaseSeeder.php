<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //
        DB::table('characters')->insert([
            'id' => 1,
            'name' => 'Test Character',
            'init' => 2,
        ]);

        /*
        $table->increments('id');
        $table->string('name');
        $table->string('conditions'); //i.e darkness, wind, water, etc
        $table->smallInteger('round');
        */

        DB::table('encounters')->insert([
            'id' => 1,
            'name' => 'Test Encounter',
            'conditions' => 'dark, slippery, low ceiling',
            'round' => 1
        ]);

        /*
        $table->increments('id');
        $table->string('name');
        $table->smallInteger('init');
        $table->smallInteger('max_hp');
        $table->smallInteger('to_hit_melee');
        $table->smallInteger('to_hit_ranged');
        $table->smallInteger('to_hit_spell');
        $table->smallInteger('ac');
        */

        DB::table('monsters')->insert([
            'id' => 1,
            'name' => 'Test Monster',
            'init' => 5,
            'max_hp' => 30,
            'to_hit_melee' => 4,
            'to_hit_ranged' => 4,
            'to_hit_spell' => 4,
            'ac' => 15
        ]);

        /*
        $table->increments('id');
        $table->integer('monster_id')->unsigned();
        $table->integer('current_hp');
        $table->string('status_effects');
        */

        DB::table('monster_instances')->insert([
            'id' => 1,
            'monster_id' => 1,
            'current_hp' => 12,
            'status_effects' => 'prone'
        ]);

        /*
        $table->increments('id');
        $table->integer('encounter_id')->unsigned();
        $table->integer('actor_id')->unsigned();
        $table->string('actor_type');
        $table->integer('current_init');
        */

        DB::table('encounter_actors')->insert([
            'id' => 1,
            'encounter_id' => 1,
            'actor_id' => 1,
            'actor_type' => 'App\Character',
            'current_init' => 11
        ]);

        DB::table('encounter_actors')->insert([
            'id' => 2,
            'encounter_id' => 1,
            'actor_id' => 1,
            'actor_type' => 'App\MonsterInstance',
            'current_init' => 4
        ]);

    }
}
