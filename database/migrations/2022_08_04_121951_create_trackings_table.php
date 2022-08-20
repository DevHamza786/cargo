<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('track_id')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('mode')->nullable();
            $table->string('detail')->nullable();
            $table->string('hs_code')->nullable();
            $table->string('item')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_type')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_cnic')->nullable();
            $table->string('company_ntn')->nullable();
            $table->string('company_reg')->nullable();
            $table->string('consignee')->nullable();
            $table->string('shipper')->nullable();
            $table->string('vender')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('origin_country')->nullable();
            $table->string('Destination_country')->nullable();
            $table->unsignedTinyInteger('created_by')->nullable();




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
        Schema::dropIfExists('trackings');
    }
}
