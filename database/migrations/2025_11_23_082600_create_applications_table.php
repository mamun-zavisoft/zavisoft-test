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
       
        Schema::create('applications', function (Blueprint $table) {
        $table->id();
         $table->foreignId('job_id')->constrained('job_circulars')->onDelete('cascade');
        $table->string('name');
        $table->string('email');
        $table->string('github')->nullable();
        $table->string('linkedin')->nullable();
        $table->text('about');
        $table->string('cv');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
