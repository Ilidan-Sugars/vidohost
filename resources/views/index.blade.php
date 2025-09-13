@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <ul>
        @foreach ($videos as $video)
            <li>{{ $video->video_name }}</li>
        @endforeach
    </ul>


@endsection
