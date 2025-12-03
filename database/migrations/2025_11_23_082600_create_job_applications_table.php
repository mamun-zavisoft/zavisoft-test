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
        Schema::create('job_applications', function (Blueprint $table) {
        $table->id();
        $table->foreignId('job_id')->constrained('job_circulars')->onDelete('cascade');
        $table->string('name');
        $table->string('email');
        $table->string('phone');
        $table->string('github')->nullable();
        $table->string('linkedin')->nullable();
        $table->text('about');
        $table->string('cv');
        $table->enum('status', ['pending', 'shortlisted', 'interview_scheduled', 'interviewed', 'hired'])->default('pending');
        $table->date('interview_date')->nullable();
        $table->float('interview_mark')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
