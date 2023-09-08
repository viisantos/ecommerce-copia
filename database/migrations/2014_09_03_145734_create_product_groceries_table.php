<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('product_groceries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('order')->nullable();
            $table->integer('table')->nullable();
            $table->integer('origin')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('product_groceries');
    }
};
