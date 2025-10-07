@extends('layouts.app')

@section('title', 'Video')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-8 ">
                <!-- Loading window
                            <div class="loading-window" id="video-loading" width="100%" height="auto">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            -->
                @php $first = true; @endphp
                @foreach ($video['url_hosts'] as $host)
                    @php $iframeId = 'iframe-' . $host['source']; @endphp
                    @if($host['source'] == 'youtube')
                        <iframe class="iframe{{ $first ? '' : ' d-none' }}" id="iframe-youtube" width="100%" height="auto"
                            src="{{ $host['links'] }}" frameborder="0" style="border: solid 4px #37474F"></iframe>
                    @elseif($host['source'] == 'vk')
                        <iframe class="iframe{{ $first ? '' : ' d-none' }}" id="iframe-vk" src="{{ $host['links'] }}"
                            width="100%" height="auto" style="background-color: #000"
                            allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0"
                            allowfullscreen></iframe>
                    @elseif($host['source'] == 'rutube')
                        <iframe class="iframe{{ $first ? '' : ' d-none' }}" id="iframe-rutube"  width="100%" height="auto"
                            src="https://rutube.ru/play/embed/cca66bbf58d614e16088906db06c6a0d/?skinColor=0e8dee"
                            style="border: none;" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen
                            allowFullScreen></iframe>
                    @endif
                    @php $first = false; @endphp
                @endforeach
            </div>
            <div class="col-4">

                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        @foreach ($video['url_hosts'] as $host)
                            @if($host['source'] == 'youtube')
                                <option value="{{ $host['source'] }}" class="btn btn-gradient">YouTube</option>
                            @elseif($host['source'] == 'vk')
                                <option value="{{ $host['source'] }}" class="btn btn-gradient">Vk</option>
                            @elseif($host['source'] == 'rutube')
                                <option value="{{ $host['source'] }}" class="btn btn-gradient">RuTube</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="floatingSelect">Выберите источник</label>
                </div>

            </div>
            <div class="col-12">
                {{ print_r($video['url_hosts']) }}
            </div>
        </div>
    </div>




@endsection
