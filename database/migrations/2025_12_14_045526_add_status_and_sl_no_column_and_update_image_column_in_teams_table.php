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
        $table->integer('sl_no')
              ->nullable()
              ->after('id')
              ->comment('sl no / display order');

        $table->tinyInteger('status')
              ->default(1)
              ->after('image')
              ->comment('0 = inactive, 1 = active');
    });

    Schema::table('teams', function (Blueprint $table) {
        // Modify & drop columns
        $table->string('image')->change();
        $table->dropColumn('facebook');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('teams', function (Blueprint $table) {
        // Modify image column
        $table->text('image')->nullable()->change();

        // Restore facebook column
        $table->string('facebook')->nullable();
    });

    Schema::table('teams', function (Blueprint $table) {
        // Drop added columns
        $table->dropColumn(['status', 'sl_no']);
    });
}
};
