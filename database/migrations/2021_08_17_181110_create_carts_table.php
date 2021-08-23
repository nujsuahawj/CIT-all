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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->integer('customer_id')->nullable();
            $table->integer('total_qty');
            $table->biginteger('sub_total');
            $table->biginteger('shipping_fee')->nullable();
            $table->biginteger('grand_total');
            $table->integer('payment_id')->nullable();
            $table->integer('shipping_id')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
