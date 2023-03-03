<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->string('user_name');
            $table->string('contact_number');
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_address');
            $table->string('from');
            $table->string('to');
            $table->string('receive_address');
            $table->string('city');
            $table->string('material');
            $table->float('weight');
            $table->float('size');
            $table->date('takingoff');
            $table->date('arrival');
            $table->string('method');
            $table->float('price');
            $table->text('product_description');
            $table->text('image')->nullable();
            $table->boolean('is_ordered')->default(0);
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
        Schema::dropIfExists('shipment');
    }
}
