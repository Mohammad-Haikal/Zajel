<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeaRequestOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sea_request_offer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sea_request_id')->constrained('sea_request')->onDelete('cascade');
            $table->string('company');
            $table->float('price');
            $table->float('total_price');
            $table->date('date_of_loading');
            $table->date('date_of_discharge');
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
        Schema::dropIfExists('sea_request_offer');
    }
}
