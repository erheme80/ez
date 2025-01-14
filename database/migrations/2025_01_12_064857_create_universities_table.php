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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thumbnail')->nullable();
            $table->text('description');
            $table->string('location');
            $table->date('established_at')->nullable();
            $table->integer('ranking')->nullable();
            $table->decimal('tuition_fee', 15, 2)->nullable();
            $table->integer('student_population')->nullable();
            $table->integer('faculty_count')->nullable();
            $table->text('courses_offered')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->text('admission_requirements')->nullable();
            $table->text('scholarships')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
