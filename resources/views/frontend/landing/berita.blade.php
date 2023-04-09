@extends('layouts.frontend.app')

@section('content')

    <!-- Homepage -->
    <div class="menu-section-slide">
        <div class="main-icon-menu-section-slide">
            <x-icon type="slide-menu" classicon="none" />
        </div>
    </div>
    

    <div class="slide-image">
        <div class="section-slide">
            <div class="icon-slide-section">
            </div>
        </div>
        <div class="text-ani-slide">
            <div class="textone" id="text-slide">
                <div class="head-text-wrap">
                    <p class="text-slide-head" id="text-slide-head">SMK WIKRAMA</p>
                </div>
                <div class="mid-text-wrap">
                    <p class="text-mid" id="text-mid">{{$pages->title}}</p>
                </div>
                <div class="text-last-wrap">
                    <p class="text-last" id="text-last">Bogor</p>
                </div>
            </div>
        </div>
        <section class="carousel" style="height: 60vh" aria-label="Gallery">
            <ol class="carousel__viewport" id="carousel-data">
                <img src="{{asset('storage/image/'.$pages->media)}}" alt="">
            </ol>
        </section>
    </div>
    <div class="container">
        <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="{{route('home.page')}}" style="text-decoration: none;">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('home.page')}}" style="text-decoration: none;">{{$pages->title}}</a></li>
            <li class="breadcrumb-item active">{{$post->title}}</li>
          </ol>
    </div>
    <div class="container d-flex justify-content-center">
    <div class="kingster-content-container kingster-container"><div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-none"><div class=" kingster-sidebar-center kingster-column-60 kingster-line-height"><div class="kingster-content-wrap kingster-item-pdlr clearfix"><div class="kingster-content-area"><article id="post-2498121" class="post-2498121 post type-post status-publish format-standard has-post-thumbnail hentry category-berita category-berita-highlight">
        <div class="kingster-single-article clearfix">
            <p><h1 id="content">{{$post->title}}</h1></p>
            <p><img decoding="async" class="" style="display: block;
                margin-left: auto;
                margin-right: auto;
                width: 30%;
                margin-bottom: 30px;" src="{{asset('storage/image/'.$pages->media)}}" alt="" ></p>
    <p class="mb-5">{{$post->content}}</p>
    </div>	
    </article><!-- post-id -->
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection

@push('script')
    
    <script>
        let assetsUrl = "{{ asset('/storage/image/') }}"
    </script>
    <script src="{{ mix('/js/frontend/landing/script.js') }}"></script>
@endpush
