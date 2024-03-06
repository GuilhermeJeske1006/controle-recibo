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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('client');
            $table->string('cnpj_client')->nullable();
            $table->string('phone_client')->nullable();
            $table->string('email_client')->nullable();
            $table->longText('description')->nullable();
            $table->string('reference')->nullable();
            $table->string('status')->default('open');
            $table->dateTime('date_budget')->nullable();
            $table->float('value_budget')->nullable();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
