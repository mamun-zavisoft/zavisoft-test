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
        Schema::table('teams', function (Blueprint $table) {
            // Add new columns
            $table->string('title')->nullable()->after('image');
            $table->text('short_description')->nullable()->after('title');
        });
    }

  
    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn(['title', 'short_description']);
        });
    }
};
