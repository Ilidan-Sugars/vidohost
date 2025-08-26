<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    protected $table = 'video_categoy';

    protected $fillable = [
        'name',
        'description',
    ];

    function VideoCategory(
        return $this->belongsToMany(Project::class, 'project_category_project', 'category_id', 'video_id');
    )
}
