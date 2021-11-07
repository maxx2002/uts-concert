<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('band_id');
            $table->string('event_name');
            $table->string('organizer');
            $table->string('date');
            $table->string('location');
            $table->string('ticket_price');
            $table->string('event_instagram');
            $table->string('contact_person');
            $table->string('contact_phone');
            $table->string('event_poster');
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
        Schema::dropIfExists('event');
    }
}
