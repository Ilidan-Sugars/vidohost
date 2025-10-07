@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="container">
        <ul class="row p-0">
            @forelse ($videos as $video)
                <ol class="col-md-4 my-2">
                    <a href="/video/{{ $video->id}}" class="video-item">
                        <div class="video-thumb">
                            @if($video->video_thumbnail)
                                <img src="{{asset('storage/' . $video->video_thumbnail) }}" alt="{{ $video->video_name }} thumbnail">
                            @else
                                <div class="no-thumb"> </div>
                            @endif
                        </div>
                        <div class="video-info">
                            <span class="video-title">{{ $video->video_name }}</span>
                        </div>
                    </a>
                </ol>
            @empty
                <ol class="no-videos">Видео не найдены.</ol>
            @endforelse
        </ul>
    </div>
@endsection
