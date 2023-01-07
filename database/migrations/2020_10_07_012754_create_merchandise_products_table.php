<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchandiseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandise_products', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('m_invoice_id')->nullable();
            $table->string('r_invoice_id')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('pickup_man_status')->nullable();
            $table->string('merchandise_status')->nullable();
            $table->string('roll_express_status')->nullable();
            $table->string('rating')->nullable();
            $table->string('agent_id')->nullable();
            $table->longText('remark')->nullable();
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
        Schema::dropIfExists('merchandise_products');
    }
}
