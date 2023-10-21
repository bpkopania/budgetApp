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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained();
            $table->boolean('InOut'); // Pole InOut jako wartość logiczna (true/false)
            $table->decimal('Value'); // Przykład dla liczby zmiennoprzecinkowej
            $table->boolean('isPeriodic'); // Pole isPeriodic jako wartość logiczna (true/false)
            $table->integer('period')->nullable(); // Pole period jako liczba całkowita
            $table->string('Name');
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
