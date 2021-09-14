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
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('extra_name')->nullable();
            $table->integer('father_product_id')->nullable();
            $table->biginteger('price')->nullable()->default('0');
            $table->biginteger('import_price')->nullable()->default('0');
            $table->biginteger('import_price_calc')->nullable();
            $table->biginteger('price_online')->nullable();
            $table->string('image')->nullable();
            $table->float('vat')->nullable();
            $table->string('note')->nullable();
            $table->text('des')->nullable();
            $table->longtext('long_des')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('thumb')->nullable();
            $table->string('link')->nullable();
            $table->tinyinteger('trash')->default('0');
            $table->float('min_reserve')->nullable();
            $table->tinyinteger('type')->nullable();
            $table->integer('catalog_id')->nullable();
            $table->integer('is_like')->nullable();
            $table->string('unit_name')->nullable();
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
