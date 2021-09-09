<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->biginteger('phone')->unique();
            $table->string('email')->nullable();
            $table->string('password');
            $table->integer('emp_id')->nullable();
            $table->integer('role_id')->nullable();
            $table->integer('branh_id')->default('9');
            $table->integer('del')->default('0');
            $table->timestamps();

            //$table->foreign('emp_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
