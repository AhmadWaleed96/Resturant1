<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('product');
            $table->integer('price');
            $table->integer('quantity');
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
        Schema::dropIfExists('deliveries');
<<<<<<< HEAD:database/migrations/2022_06_30_091053_create_deliveries_table.php
        Schema::dropIfExists('bookings');
=======
>>>>>>> 2456e93d1c4d653d18682123b2e419cd41c9a7a1:database/migrations/2022_06_30_180949_create_deliveries_table.php
    }
}
