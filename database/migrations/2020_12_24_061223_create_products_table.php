<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('product_name')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('total_product_price')->nullable();
            $table->integer('per_product_price')->nullable();
            $table->integer('total_product_quantity')->default(0);
            $table->date('product_entry_date')->nullable();
         
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
        Schema::dropIfExists('products');
    }
}
