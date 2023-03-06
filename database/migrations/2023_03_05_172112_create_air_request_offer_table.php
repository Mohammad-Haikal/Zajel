<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirRequestOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_request_offer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('air_request_id')->constrained('air_request')->onDelete('cascade');
            $table->string('company');
            $table->float('price');
            $table->float('total_price');
            $table->date('date_of_departure');
            $table->date('date_of_destination');
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
        Schema::dropIfExists('air_request_offer');
    }
}
