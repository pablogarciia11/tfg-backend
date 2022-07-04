<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrocyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microcycles', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->integer('times');
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
        Schema::dropIfExists('microcycles');
    }
}
