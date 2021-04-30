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
            $table->timestamps();
            $table->string('model', 50)->nullable(false);
            $table->string('color', 50)->nullable();
            $table->string('description')->nullable(false);
            $table->integer('brandId')->nullable(false);
            $table->integer('categoryId')->nullable(false);
            $table->foreign('brandId')->references('id')->on('brands');
            $table->foreign('categoryId')->references('id')->on('categories');
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
