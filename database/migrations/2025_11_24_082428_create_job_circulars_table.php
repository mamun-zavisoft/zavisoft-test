<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('job_circulars', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('type');
        $table->string('experience');
        $table->string('salaryrange');
        $table->text('address');
        $table->longText('description');
        $table->longText('responsibilities');
        $table->longText('requirement');
        $table->text('aboutcompany');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_circulars');
    }
};
