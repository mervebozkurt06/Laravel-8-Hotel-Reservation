<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id')->nullable();
            $table->integer('room_id')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->string('name',50)->nullable();
            $table->string('surname',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('message',100)->nullable();
            $table->string('note',100)->nullable();
            $table->integer('days')->nullable();
            $table->float('total')->nullable();
            $table->integer('adult')->nullable();
            $table->integer('kid')->nullable();
            $table->dateTime('checkin')->nullable();
            $table->dateTime('checkout')->nullable();
            $table->string('IP',20)->nullable();
            $table->string('status',5)->nullable()->default('False');
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
        Schema::dropIfExists('reservations');
    }
}
