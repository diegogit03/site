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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['payable', 'receivable']);
            $table->string('description');
            $table->decimal('amount', 15, 2);
            $table->date('date');
            $table->enum('status', ['pending', 'paid', 'overdue']);
            $table->enum('repetition', ['unique', 'fixed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
