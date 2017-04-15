<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatures', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('species', 255);
            $table->string('name', 255);
            $table->string('gender');
            $table->string('status', 255);
            $table->string('levelsWild');
            $table->string('levelsDom');
            $table->string('tamingEff');
            $table->string('imprintingBonus');
            $table->string('owner');
            $table->string('note');
            $table->string('guid');
            $table->integer('isBred');
            $table->string('fatherGuid');
            $table->string('motherGuid');
            $table->integer('generation');
            $table->string('colors');
            $table->string('growingUntil');
            $table->string('cooldownUntil');
            $table->string('domesticatedAt');
            $table->integer('neutered');
            $table->integer('mutationCounter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('creatures');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
