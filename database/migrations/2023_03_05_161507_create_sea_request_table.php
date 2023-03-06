<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeaRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sea_request', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->text('shipper');
            $table->text('consignee');
            $table->text('notify_address');
            $table->string('carrier_reference');
            $table->string('swb_no');
            $table->string('vessel');
            $table->string('voyage_no');
            $table->string('port_of_loading');
            $table->string('port_of_discharge');
            $table->text('nos');
            $table->text('number_of_package');
            $table->float('gross_weight');
            $table->float('measurement');
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
        Schema::dropIfExists('sea_request');
    }
}
