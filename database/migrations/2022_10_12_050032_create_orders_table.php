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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullOnDelete();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->nullOnDelete();
            $table->tinyInteger('order_status');
            $table->longText('order_description');
            $table->bigInteger('quantity')->nullable();
            $table->date('date')->nullable();
            $table->string('tracking_no');
            $table->float('total_price');
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
        Schema::dropIfExists('orders');
    }
};
