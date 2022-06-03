@extends('frontend.layouts.app')
@section('title', str()->title($berita->title))

@section('content')
    <div class="wk-page">
        <div class="jumbotron">
            <img src="{{ asset('/uploads/images/' . $berita->media) }}" alt="{{str()->title($berita->title)}}">
        </div>
        <!-- Title Page -->
        <div class="title-page">
            <div class="decoration-left">
                <div class="dl-1"></div>
                <div class="dl-2"></div>
            </div>
    
            <div class="decoration-title">
                <h1>Berita</h1>
    
                <div class="line-title-logo">
                    <div class="space-logo">
                        <svg width="52" height="46" viewBox="0 0 52 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M45.6806 0H5.43056C2.43544 0 0 2.29233 0 5.11111V40.8889C0 43.7077 2.43544 46 5.43056 46H45.6806C48.6757 46 51.1111 43.7077 51.1111 40.8889V5.11111C51.1111 2.29233 48.6757 0 45.6806 0ZM45.6806 40.8889H5.43056C5.28489 40.8889 5.18522 40.848 5.14178 40.848C5.12389 40.848 5.11367 40.8531 5.11111 40.8684L5.08044 5.22867C5.09833 5.20311 5.21333 5.11111 5.43056 5.11111H45.6806C45.8824 5.11367 45.9923 5.18267 46 5.13156L46.0307 40.7713C46.0128 40.7969 45.8978 40.8889 45.6806 40.8889Z" fill="#C6C6C6"/>
                            <path d="M10.2227 10.2222H25.556V25.5556H10.2227V10.2222ZM28.1115 30.6667H10.2227V35.7778H40.8893V30.6667H30.6671H28.1115ZM30.6671 20.4445H40.8893V25.5556H30.6671V20.4445ZM30.6671 10.2222H40.8893V15.3333H30.6671V10.2222Z" fill="#C6C6C6"/>
                        </svg>                                                                                                                        
                    </div>
                </div>
            </div>
    
            <div class="decoration-right">
                <div class="dr-1"></div>
                <div class="dr-2"></div>
            </div>
        </div>
    
    
        <div class="title-information">
            <h3>{{str()->title($berita->title)}}</h3>
        </div>
    
    
        <!-- Content Page -->
        <div class="content-page-2">
            <div class="main-content">
                <div class="sub-content">
                    <div class="thumbnail">
                        <img src="{{ asset('/uploads/images/' . $berita->media) }}" alt="{{str()->title($berita->title)}}">
                    </div>
    
                    <div class="point-content" style="margin-top: 50px;">
                        {!! $berita->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var pointContent = document.getElementsByClassName("point-content")[0];
        pointContent.style.fontSize = "13pt";
        pointContent.style.lineHeight = "1.5";
        // add breakline
        pointContent.innerHTML = pointContent.innerHTML.replace(/\n/g, "<br>");
    </script>
@endsection