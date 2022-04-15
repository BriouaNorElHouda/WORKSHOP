<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('reservations', function (Blueprint $table) {
        $table->integer('idReservation')->primary();
        $table->string('idRoom')->unique();
        $table->integer('idUser')->unique();
        $table->date('date');
        $table->time('time');
        $table->string('state');
        $table->text('objective');
        $table->timestamps();

    });

    Schema::table('reservations', function($table)
    {
        $table->foreign('idRoom')->references('idRoom')->on('rooms')->onDelete('cascade');
        $table->foreign('idUser')->references('idUser')->on('users')->onDelete('cascade');

    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
