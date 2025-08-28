<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    protected $table = 'video_category';

    protected $fillable = [
        'name',
        'description',
    ];

    public function VideoCategory()
    {
        return $this->belongsToMany(Video::class, 'video_category_video', 'category_id', 'video_id');
    }
}
