@extends('layouts.app')

@section('title', 'Video')

@section('content')


    <div>
        @foreach ($video['url_hosts'] as $host)
            @if($host['source'] == 'youtube')
                <iframe width="560" height="315" src="{{ $host['links'] }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div></div>
            @elseif($host['source'] == 'rutube')
                <div>{{ $host['links'] }} -- </div>
            @endif
        @endforeach
    </div>




@endsection
