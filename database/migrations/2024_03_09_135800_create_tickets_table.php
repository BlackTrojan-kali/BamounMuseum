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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string("name_customer");
            $table->bigInteger("phone");
            $table->string("email")->nullable();
            $table->string("country");
            $table->string("paymentMode");
            $table->integer("price");
            $table->integer("numberCustomers");
            $table->date("reservedDate");
            $table->string("ticketType");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
