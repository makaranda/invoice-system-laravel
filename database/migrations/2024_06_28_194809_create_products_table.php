<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pro_code')->unique();
            $table->string('pro_name')->nullable();
            $table->string('unit_of_measure')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('stock_availability')->nullable();
            $table->string('warehouse_code');
            $table->foreign('warehouse_code')->references('warehouse_code')->on('warehouses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
