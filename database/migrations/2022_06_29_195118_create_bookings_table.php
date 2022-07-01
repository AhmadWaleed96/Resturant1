<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
=======

>>>>>>> 2456e93d1c4d653d18682123b2e419cd41c9a7a1
class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('bookings', function (Blueprint $table) {

=======


        Schema::create('bookings', function (Blueprint $table) {
>>>>>>> 2456e93d1c4d653d18682123b2e419cd41c9a7a1
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
<<<<<<< HEAD
=======

>>>>>>> 2456e93d1c4d653d18682123b2e419cd41c9a7a1
        Schema::dropIfExists('bookings');
    }
}
