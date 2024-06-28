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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->unique();
            $table->date('invoice_date');
            $table->string('cus_code');
            $table->string('cus_name');
            $table->string('cus_address');
            $table->string('vat_no');
            $table->string('pro_code');
            $table->string('pro_name');
            $table->integer('pro_qty');
            $table->decimal('pro_unitprice', 8, 2);
            $table->decimal('value', 8, 2);
            $table->decimal('sub_total', 8, 2);
            $table->decimal('vat_amount', 8, 2);
            $table->decimal('grand_total', 8, 2);
            $table->unsignedBigInteger('sales_user_id');
            $table->string('sales_user_name');
            $table->timestamp('printed_date_time');
            $table->timestamps();
            $table->foreign('cus_code')->references('cus_code')->on('customers')->onDelete('cascade');
            $table->foreign('pro_code')->references('pro_code')->on('products')->onDelete('cascade');
            $table->foreign('sales_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
