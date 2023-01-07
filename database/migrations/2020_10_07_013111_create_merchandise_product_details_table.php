<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchandiseProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandise_product_details', function (Blueprint $table) {
            $table->id();
            $table->integer('merchandise_product_id');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('customer_phone');
            $table->string('user_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('agent_id')->nullable();
            $table->string('delivery_charge')->nullable();        
            $table->string('admin_invoice_id')->nullable();
            $table->string('urgent_delivery')->nullable();
            $table->string('delivery_status');
            $table->string('return_id')->nullable();
            $table->string('hold_id')->nullable();
            $table->string('payment_status');
            $table->string('admin_recieve_agent_status');
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
        Schema::dropIfExists('merchandise_product_details');
    }
}
