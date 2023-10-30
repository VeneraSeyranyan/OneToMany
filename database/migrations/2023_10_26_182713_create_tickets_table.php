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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_id')->index();
            $table->integer('ticket_number');
            $table->string('passenger_name');
            $table->string('boarding_gate');
            $table->string('class');
            $table->dateTime('boarding_time');
            $table->timestamps();

            $table->unique(['ticket_number']);

            $table->foreign('flight_id')
                ->references('id')
                ->on('flights')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign('tickets_flight_id_foreign');
        });
        Schema::dropIfExists('tickets');
    }
};
