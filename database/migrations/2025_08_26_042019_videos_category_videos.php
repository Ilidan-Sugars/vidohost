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
            $table->foreignId('videos_id')->constrained('videos');
            $table->foreignId('videos_category_id')->constrained('videos_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
