<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->decimal('price', 6, 2)->default(0);
            $table->decimal('discount', 6, 2)->default(0);
            $table->integer('discount_id')->nullable()->unsigned();
            $table->timestamps();
            // $table->foreign('order_id')->references('id')->on('orders');
            // $table->foreign('itemId')->references('id')->on('item');
            // $table->foreign('discount_id')->references('id')->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
