<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings_', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('room_id');
            $table->string('checkin_date');
            $table->string('checkout_date');
            $table->string('total_adults');
            $table->string('total_children');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings_');
    }
};