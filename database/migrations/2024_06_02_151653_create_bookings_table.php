<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('lapangan_id')->constrained()->onDelete('cascade');
            $table->timestamp('waktu_booking');
            $table->integer('jam_booking');
            $table->integer('bayar');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('lapangan_id')->references('id')->on('lapangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
