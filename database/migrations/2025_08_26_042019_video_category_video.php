<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('video_category_videos', function (Blueprint $table) {
            $table - integer('video_id')->constrained(table: 'video', indexName: 'id');
            $table - integer('video_category')->constrained(table: 'video_category', indexName: 'id');
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
