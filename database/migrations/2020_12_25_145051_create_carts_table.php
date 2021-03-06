<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::enableForeignKeyConstraints();

        
        Schema::create('carts', function (Blueprint $table) {
          $table->id('id');
          $table->unsignedBigInteger('product_id');
          $table->string('product_name');
          $table->string('ip_address')->nullable();
          $table->integer('product_quantity')->default(1);
          $table->timestamps();
          $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
