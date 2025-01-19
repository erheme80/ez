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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')  
                  ->constrained('universities') 
                  ->onDelete('cascade'); 
            $table->string('name');  // Name of the scholarship
            $table->decimal('amount', 15, 2); // Amount of the scholarship
            $table->text('description')->nullable(); // Description of the scholarship
            $table->text('eligibility')->nullable(); // Eligibility requirements
            $table->date('deadline')->nullable(); // Deadline for the scholarship
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};