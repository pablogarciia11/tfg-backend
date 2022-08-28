<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions_routines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('day');
            $table->string('weekDay');
            $table->date('date')->nullable();
            $table->boolean('completed');
            $table->unsignedBigInteger('sessionId');
            $table->foreign('sessionId')->references('id')->on('sessions')->onDelete('cascade');
            $table->unsignedBigInteger('routineId');
            $table->foreign('routineId')->references('id')->on('routines')->onDelete('cascade');
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
        Schema::dropIfExists('sessions_routines');
    }
}
