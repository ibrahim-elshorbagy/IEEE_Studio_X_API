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
        Schema::create('application_jobs', function (Blueprint $table) {
            $table->foreignId('application_id')->constrained()->onDelete('cascade');
            $table->foreignId('job_id')->constrained()->onDelete('cascade');
            $table->primary(['application_id', 'job_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_jobs');
    }
};
