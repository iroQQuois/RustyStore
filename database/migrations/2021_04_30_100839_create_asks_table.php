<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('theme', 50)->nullable(false);
            $table->boolean('order_status')->nullable(false);
            $table->string('message')->nullable(false);
            $table->string('email', 50)->nullable(false);
            $table->string('full_name', 50)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asks');
    }
}
