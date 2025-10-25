<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Video extends Model
{
    protected $fillable = [
        'video_name',
        'video_description',
        'video_thumbnail',
        'url_hosts',
        'status'
    ];

    protected $casts = [
        'url_hosts' => 'array',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(VideoCategory::class, 'video_category_videos');
    }
}
