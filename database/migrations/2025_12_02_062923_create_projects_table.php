<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('about_project');
            $table->text('business_result')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('gallery_image')->nullable();
            $table->text('challenge')->nullable();
            $table->longText('solution')->nullable();
            $table->text('final_impact');
            $table->text('contributors')->nullable();
            $table->text('platforms')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
