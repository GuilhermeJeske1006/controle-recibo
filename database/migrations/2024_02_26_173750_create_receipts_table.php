<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->decimal('value', 10, 2);
            $table->string('payer');
            $table->string('cpf_payer')->nullable();
            $table->string('referent');
            $table->string('city');
            $table->dateTime('date');
            $table->string('sender');
            $table->string('cpf_sender')->nullable();
            $table->string('phone_sender')->nullable();
            $table->integer('type_payment')->default(0);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
