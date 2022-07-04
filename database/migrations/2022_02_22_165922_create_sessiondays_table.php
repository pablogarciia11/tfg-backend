<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessiondaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessiondays', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->unsignedBigInteger('sessionId');
            $table->foreign('sessionId')->references('id')->on('sessions')->onDelete('cascade');
            $table->unsignedBigInteger('microcycleId');
            $table->foreign('microcycleId')->references('id')->on('microcycles')->onDelete('cascade');
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
        Schema::dropIfExists('sessiondays');
    }
}
