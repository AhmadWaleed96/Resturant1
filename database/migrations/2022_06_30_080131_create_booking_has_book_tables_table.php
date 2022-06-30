<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingHasBookTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_has_book_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id');
            $table->foreign('booking_id')->on('bookings')->references('id');
            $table->foreignId('book_table_id');
            $table->foreign('book_table_id')->on('book_tables')->references('id');
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
        Schema::dropIfExists('booking_has_book_tables');
    }
}
