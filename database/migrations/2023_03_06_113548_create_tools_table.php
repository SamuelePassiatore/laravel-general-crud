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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique()->required();
            $table->text('img_url')->nullable();
            $table->text('description')->nullable();
            $table->string('category', 50)->nullable();
            $table->year('release_year')->nullable();
            $table->string('latest_version', 10)->nullable();
            $table->text('download_link')->nullable();
            $table->json('supported_os')->nullable();
            $table->unsignedTinyInteger('vote')->nullable();
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
