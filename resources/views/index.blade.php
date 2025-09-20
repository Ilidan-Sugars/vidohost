@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="container">
        <ul class="row p-0 justify-content-between">
            @forelse ($videos as $video)
                <ol class="col-md-4 ">
                    <a href="/video/{{ $video->id}}" class="video-item">
                        <div class="video-thumb">
                            @if($video->video_thumbnail)
                                <img src="app/public/{{ $video->video_thumbnail }}" alt="{{ $video->video_name }} thumbnail">
                            @else
                                <div class="no-thumb"> </div>
                            @endif
                        </div>
                        <div class="video-info">
                            <span class="video-title">{{ $video->video_name }}</span>
                            @if($video->video_description)
                                <dev class="video-desc">{{ $video->video_description }}</dev>
                            @endif
                        </div>
                    </a>
                </ol>
            @empty
                <ol class="no-videos">Видео не найдены.</ol>
            @endforelse
        </ul>
    </div>
@endsection
