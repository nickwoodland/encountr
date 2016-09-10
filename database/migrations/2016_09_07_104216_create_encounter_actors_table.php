<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncounterActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounter_actors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('encounter_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->string('actor_type');
            $table->integer('current_init');
            $table->timestamps();

            $table->foreign('encounter_id')
            ->references('id')
            ->on('encounters')
            ->onDelete('cascade');

            // not 100% sure if/how to define a polymorphic relation in a migration
            // TODO -> define relation between actor and char/monster
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encounter_actors');
    }
}
