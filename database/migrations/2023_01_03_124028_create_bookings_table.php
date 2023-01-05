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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('movie');
            $table->string('show_daytime');
            $table->string('show_time');
            $table->string('show_date');
            $table->integer('seats');
            $table->string('name');
            $table->string('last_name');
            $table->integer('contact_no');
            $table->integer('cnic_no');
            $table->string('email');
            $table->integer('drinks');
            $table->integer('popcorn');
            $table->integer('drinks_price');
            $table->integer('popcorn_price');
            $table->integer('seats_price');
            $table->integer('total_payment');
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
        Schema::dropIfExists('bookings');
    }
};
