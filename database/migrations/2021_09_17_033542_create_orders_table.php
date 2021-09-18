<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->biginteger('user_id')->unsigned();
            $table->biginteger('subtotal');
            $table->biginteger('discount')->default(0);
            $table->biginteger('tax');
            $table->biginteger('total');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->integer('home_no')->nullable();
            $table->integer('vill_id')->nullable();
            $table->integer('dis_id')->nullable();
            $table->integer('pro_id')->nullable();
            $table->enum('status',['ordered','delivered','canceled'])->default('ordered');
            $table->boolean('is_shipping_different')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
}
