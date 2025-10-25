@extends('layouts.app')

@section('title', 'Video')

@section('content')



    <div class="container">
        <div class="row justify-content-center">

            <div class="col-8">
                <h1 class="display-6 fw-bold text-primary mb-3">{{ $video->video_name }}</h1>
            </div>
            <div class="col-lg-8 col-md-12 mb-3">


                @php $first = true; @endphp
                @foreach ($video['url_hosts'] as $host)
                    @php $iframeId = 'iframe-' . $host['source']; @endphp
                    @if($host['source'] == 'youtube')
                        <iframe class="iframe{{ $first ? '' : ' d-none' }}" id="iframe-youtube" width="100%" height="auto"
                            src="{{ $host['links'] }}" frameborder="0" style="border: solid 4px #37474F"></iframe>
                    @elseif($host['source'] == 'vk')
                        <iframe class="iframe{{ $first ? '' : ' d-none' }}" id="iframe-vk" src="{{ $host['links'] }}" width="100%"
                            height="auto" style="background-color: #000"
                            allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0"
                            allowfullscreen></iframe>
                    @elseif($host['source'] == 'rutube')
                        <iframe class="iframe{{ $first ? '' : ' d-none' }}" id="iframe-rutube" width="100%" height="auto"
                            src="{{ $host['links'] }}" style="border: none;" allow="clipboard-write; autoplay" webkitAllowFullScreen
                            mozallowfullscreen allowFullScreen></iframe>
                    @endif
                    @php $first = false; @endphp
                @endforeach
                <div class="d-block my-2">
                    <div class="sticky-top" style="top: 20px;">
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
                </div>


                <!-- Описание видео -->
                @if($video->video_description)
                    <div class="video-description mt-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-3">
                                    <i class="bi bi-info-circle me-2"></i>Описание
                                </h5>
                                <div class="card-text">{!! $video->video_description !!}</div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>




@endsection
