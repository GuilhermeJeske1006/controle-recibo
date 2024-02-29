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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('state');
            $table->string('street');
            $table->string('number');
            $table->string('complement')->nullable();
            $table->string('cep');
            $table->string('neighborhood');
            $table->timestamps();
        });

        Schema::table('companies', function (Blueprint $table) {
            $table->unsignedBigInteger('adress_id')->nullable();
            $table->foreign('adress_id')->references('id')->on('adresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresses');
    }
};
