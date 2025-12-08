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
        Schema::table('job_circulars', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
            $table->string('vacancy')->nullable()->after('location_type');
            $table->dropColumn('address');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('title');
        });

        Schema::table('project_categories', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('heading');
        });

        Schema::table('service_categories', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_circulars', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('vacancy');
            $table->string('address')->nullable();
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('project_categories', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('service_categories', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
