<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waiters', function (Blueprint $table) {
            $table->id();
            $table->integer('table_number');
            $table->string('meal_name');
            $table->integer('quantity');
            $table->integer('price');
            $table->foreignId('kitchen_id');
            $table->foreign('kitchen_id')->on('kitchens')->references('id');
            $table->foreignId('accountants_id');
            $table->foreign('accountants_id')->on('accountants')->references('id');
            $table->softDeletes();
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
        Schema::dropIfExists('waiters');
    }
}
