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
        Schema::create('videos',function (Blueprint $table) {
            $table->id();
            $table->string('video_name');
            $table->text('video_description')->nullable();
            $table->string('video_thumbnail')->nullable();
            $table->json('url_hosts');
            $table->string('status')->default('hide');
            $table->timestamps();

            // Индексы для оптимизации
            $table->index('status');
            $table->index('video_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
