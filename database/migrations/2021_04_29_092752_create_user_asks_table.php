<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAsksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('theme', 255)->nullable(false);
            $table->boolean('madeAnOrder')->nullable(false);
            $table->string('fullName', 255)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->string('message', 255);
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
