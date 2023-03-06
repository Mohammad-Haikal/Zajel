<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_request', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->text('shipper_name');
            $table->text('shipper_address');
            $table->text('consignee_name');
            $table->text('consignee_address');
            $table->string('agent_name');
            $table->string('agent_city');
            $table->string('airport_of_departure');
            $table->string('airport_of_destination');
            $table->text('number_of_pieces');
            $table->text('number_of_package');
            $table->float('gross_weight');
            $table->date('date_of_shipment');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('air_request');
    }
}



