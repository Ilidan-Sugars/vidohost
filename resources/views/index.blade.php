@extends('layouts.app')

@section('title', 'Главная')

@section('content')
<div class="home-container">
    <ul class="video-list">
        @forelse ($videos as $video)
            <li class="video-item">
                <div class="video-thumb">
                    @if($video->video_thumbnail)
                        <img src="{{ $video->video_thumbnail }}" alt="{{ $video->video_name }} thumbnail">
                    @else
                        <div class="no-thumb"> </div>
                    @endif
                </div>
                <div class="video-info">
                    <span class="video-title">{{ $video->video_name }}</span>
                    @if($video->video_description)
                        <p class="video-desc">{{ $video->video_description }}</p>
                    @endif
                </div>
            </li>
        @empty
            <li class="no-videos">Видео не найдены.</li>
        @endforelse
    </ul>
</div>
@endsection
