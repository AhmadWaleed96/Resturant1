<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<<< HEAD:database/migrations/2022_06_30_091053_create_deliveries_table.php
class CreateDeliveriesTable extends Migration
========
class CreateBookingsTable extends Migration
>>>>>>>> b1b0e118e991c5743699d9193a7d777eaffaaf33:database/migrations/2022_06_29_195118_create_bookings_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:database/migrations/2022_06_30_091053_create_deliveries_table.php
        Schema::create('deliveries', function (Blueprint $table) {
========
        Schema::create('bookings', function (Blueprint $table) {
>>>>>>>> b1b0e118e991c5743699d9193a7d777eaffaaf33:database/migrations/2022_06_29_195118_create_bookings_table.php
            $table->id();
            $table->string('image');
            $table->string('product');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2022_06_30_091053_create_deliveries_table.php
        Schema::dropIfExists('deliveries');
========
        Schema::dropIfExists('bookings');
>>>>>>>> b1b0e118e991c5743699d9193a7d777eaffaaf33:database/migrations/2022_06_29_195118_create_bookings_table.php
    }
}
