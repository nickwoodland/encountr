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

        DB::table('encounters')->insert([
            'id' => 1,
            'name' => 'Test Character',
            'init' => 2,
        ]);

        DB::table('monsters')->insert([
            'id' => 1,
            'name' => 'Test Monster',
            'init' => 3,
        ]);

        DB::table('monster_instances')->insert([
            'id' => 1,
            'monster_id' => 1,
            'name' => 'Test Monster Instance',
            'init' => 2,
        ]);

        DB::table('encounter_actors')->insert([
            'id' => 1,
            'encounter_id' => 1,
            'actor_id' => 1,
            'actor_type' => 'App\Character',
        ]);

        DB::table('encounter_actors')->insert([
            'id' => 2,
            'encounter_id' => 1,
            'actor_id' => 1,
            'actor_type' => 'App\MonsterInstance',
        ]);

    }
}
