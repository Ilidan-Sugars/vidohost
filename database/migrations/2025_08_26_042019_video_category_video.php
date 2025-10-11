<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    { // По итогу, foreignId это сделать эквивалент, а constrained это ссылка на таблицу
        Schema::create('video_category_videos', function (Blueprint $table) {
            $table->foreignId('video_id')->constrained('videos');
            $table->foreignId('video_category_id')->constrained('video_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_category_videos');
    }
};
