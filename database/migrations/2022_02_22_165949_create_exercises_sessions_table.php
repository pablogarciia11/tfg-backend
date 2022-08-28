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
            $table->string('name')->nullable();
            $table->integer('series');
            $table->integer('minReps');
            $table->integer('maxReps')->nullable();
            $table->integer('rest');
            $table->integer('RIR');
            $table->string('observations')->nullable();
            $table->unsignedBigInteger('sessionId')->nullable();
            $table->foreign('sessionId')->references('id')->on('sessions')->onDelete('cascade');
            $table->unsignedBigInteger('sessionRoutineId')->nullable();
            $table->foreign('sessionRoutineId')->references('id')->on('sessions_routines')->onDelete('cascade');
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
