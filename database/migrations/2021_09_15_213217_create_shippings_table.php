<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->biginteger('order_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->integer('home_no')->nullable();
            $table->integer('vill_id')->nullable();
            $table->integer('dis_id')->nullable();
            $table->integer('pro_id')->nullable();
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
        Schema::dropIfExists('shippings');
    }
}
