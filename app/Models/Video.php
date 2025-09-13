<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected static ?string $modelLabel = 'video';
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'User registered';
    }

    protected $fillable = ['video_name','video_description','video_thumbnail','url_hosts','status'];
    protected $casts = [
        'url_hosts' => 'array',
    ];
}
