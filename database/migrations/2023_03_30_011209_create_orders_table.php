<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->boolean('active');
            $table->integer('customer_id');
            $table->integer('staff_id');
            $table->integer('total');
            $table->integer('subtotal');
            $table->integer('vat');
            $table->string('status');
            $table->string('notes');
            $table->date('datentime');
            $table->string('photo1');
            $table->string('photo2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
