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
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('mode')->nullable();
            $table->string('mon')->nullable();
            $table->string('good_type')->nullable();
            $table->string('goods_name')->nullable();
            $table->string('hs_code')->nullable();
            $table->string('clearing_charges')->nullable();
            $table->string('custome_duties')->nullable();
            $table->string('qty')->nullable();
            $table->string('weight')->nullable();
            $table->string('volumetric_weight')->nullable();
            $table->string('cartons')->nullable();
            $table->string('invoice_value')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('mode_shipment')->nullable();
            $table->string('charges')->nullable();
            $table->string('insurance')->nullable();
            $table->string('item_price')->nullable();
            $table->string('instruction')->nullable();
            $table->string('source')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('sender_type')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('sender_phone')->nullable();
            $table->string('sender_Province')->nullable();
            $table->string('sender_city')->nullable();
            $table->string('sender_area')->nullable();
            $table->string('sender_country')->nullable();
            $table->string('sender_address')->nullable();
            $table->string('sender_cnic')->nullable();
            $table->string('sender_company_ntn')->nullable();
            $table->string('sender_company_reg')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_type')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('receiver_Province')->nullable();
            $table->string('receiver_city')->nullable();
            $table->string('receiver_area')->nullable();
            $table->string('receiver_country')->nullable();
            $table->string('receiver_address')->nullable();
            $table->string('receiver_cnic')->nullable();
            $table->string('receiver_company_ntn')->nullable();
            $table->string('receiver_company_reg')->nullable();
            $table->unsignedTinyInteger('created_by')->nullable();
            $table->softDeletes();
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
