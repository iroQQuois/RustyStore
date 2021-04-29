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
            $table->string('productIds', 50)->nullable(false);
            $table->boolean('delivery')->nullable(false);
            $table->date('deliveryDate')->nullable(true);
            $table->string('country', 50)->nullable(false);
            $table->string('city', 50)->nullable(false);
            $table->string('region', 50)->nullable(false);
            $table->string('street', 50)->nullable(false);
            $table->string('phone', 50)->nullable(false);
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
