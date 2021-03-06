<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->id('id');
            $table->string('product_name')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_model')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_mobile')->nullable();
            $table->text('customer_address')->nullable();
            $table->text('product_quantity')->nullable();
            $table->text('per_product_price')->nullable();
            $table->bigInteger('total_product_price')->nullable();
            $table->date('selling_date')->nullable();
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
        Schema::dropIfExists('sells');
    }
}
