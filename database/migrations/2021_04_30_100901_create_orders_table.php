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
            $table->string('fullName', 50)->nullable(false);
            $table->integer('finalCost')->nullable(false);
            $table->boolean('delivery')->nullable(false);
            $table->string('deliveryCountry', 50)->nullable();
            $table->string('deliveryCity', 50)->nullable();
            $table->string('deliveryRegion', 50)->nullable();
            $table->string('deliveryAddress', 50)->nullable();
            $table->dateTime('deliveryDate')->nullable();
            $table->string('paymentMethod', 50)->nullable(false);
            $table->string('productIds', 50)->nullable(false);
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
