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
            $table->timestamps();
            $table->string('full_name', 50)->nullable(false);
            $table->integer('final_cost')->nullable(false);
            $table->boolean('delivery')->nullable(false);
            $table->string('delivery_country', 50)->nullable();
            $table->string('delivery_city', 50)->nullable();
            $table->string('delivery_region', 50)->nullable();
            $table->string('delivery_address', 50)->nullable();
            $table->dateTime('delivery_date')->nullable();
            $table->string('payment_method', 50)->nullable(false);
            $table->string('product_ids', 50)->nullable(false);
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
