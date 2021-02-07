<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->enum('type', ['FACTURA', 'RECIBO', 'PROFORMA'])->default('FACTURA');
            $table->string('number_fact')->nullable();
            $table->dateTime('purchase_date');
            $table->decimal('total', 10, 2);
            $table->float('tax', 7,2);
            $table->enum('status', ['PENDING', 'CANCELED'])->default('PENDING');
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
