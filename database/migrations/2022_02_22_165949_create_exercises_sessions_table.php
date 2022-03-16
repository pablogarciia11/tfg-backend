<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exerciseId');
            $table->foreign('exerciseId')->references('id')->on('exercises')->onDelete('cascade');
            $table->string('name');
            $table->integer('series');
            $table->integer('reps');
            $table->integer('rest');
            $table->double('weight');
            $table->boolean('isRIR');
            $table->string('observations');
            $table->unsignedBigInteger('sessionId');
            $table->foreign('sessionId')->references('id')->on('sessions')->onDelete('cascade');
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
        Schema::dropIfExists('exercises_sessions');
    }
}
