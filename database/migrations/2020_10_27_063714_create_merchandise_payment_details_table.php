<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchandisePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandise_payment_details', function (Blueprint $table) {
            $table->id();
            $table->string('admin_id')->nullable();
            $table->string('merchandise_id')->nullable();
            $table->string('m_p_id')->nullable();
            $table->string('admin_paid_amount')->nullable();    
            $table->string('mer_r_amount')->nullable();              
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
        Schema::dropIfExists('merchandise_payment_details');
    }
}
