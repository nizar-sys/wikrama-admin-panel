@extends('frontend.layouts.app')
@section('title', 'Home')

@section('galeri-carousel')
<section class="carousel" aria-label="Gallery">
  <ol class="carousel__viewport">
      <div class="gradient-slide"></div>
      @foreach ($carouselGalery as $galeri)
      <li id="carousel__slide{{$galeri->id}}"
          tabindex="0"
          class="carousel__slide">
          <img src="{{asset('/uploads/images/' . $galeri->media)}}" height="unset" width="unset" alt="Carousel Images">
          <div class="carousel__snapper">
          </div>
      </li>
      @endforeach
  </ol>
</section>
@endsection

@section('berita-acara')
<div class="judul-homepage">
    <h3>Berita Terikini</h3>
    <div class="line-judul"></div>
  </div>

  <div class="berita-berita">

    @foreach ($beritaAcara as $berita)
        
    <div class="berita-terbaru">
      <div class="content-berita">
        <div class="container-berita">
          <img src="{{ asset('/uploads/images/' . $berita->media) }}" alt="{{str()->title($berita->title)}}">
          <div class="tanggal-berita">
            <p>
                {{$berita->created_at->format('d M Y')}}
            </p>
          </div>
          <div class="content-berita-text">
            <p id="content-berita-text">{{str()->title($berita->title)}}</p>
          </div>
          <a href="{{ route('berita.detail', str()->slug($berita->title)) }}" id="content-berita-btn">Baca</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <center><a id="next-page-a" href="">Baca Semua</a></center>
  </div>
@endsection

@section('virtual-wikrama')
<div id="virtual-wk" class="judul-homepage">
    <h3>Virtual Wikrama</h3>
    <div class="line-judul" id="virtual-wikrama-judul-line"></div>
  </div>

  <div class="virtual-wikrama">
    <div class="gradient-virtual"></div>
      <div class="select-virtual">

        <div style="cursor: pointer" onclick="NewTab('{{$virtualWikrama->ecommerce}}')" class="commerce">
          <div class="text-ico-virtual">
            <svg width="unset" height="unset" viewBox="0 0 52 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.8536 15.0938L17.1278 0H5.3L0.357875 12.9375C0.2055 13.3975 0.125 13.8748 0.125 14.375C0.125 17.549 3.43125 20.125 7.51663 20.125C11.2829 20.125 14.3965 17.9285 14.8536 15.0938ZM26 20.125C30.0825 20.125 33.3916 17.549 33.3916 14.375C33.3916 14.2571 33.383 14.1393 33.3773 14.0271L31.9139 0H20.0861L18.6199 14.0156C18.6131 14.1353 18.6092 14.2551 18.6084 14.375C18.6084 17.549 21.9175 20.125 26 20.125ZM40.375 23.1322V34.5H11.625V23.1495C10.3658 23.6038 8.98 23.8625 7.51663 23.8625C6.956 23.8625 6.41262 23.7964 5.875 23.7216V41.975C5.875 44.1888 7.68337 46 9.89425 46H42.1C44.3138 46 46.125 44.1859 46.125 41.975V23.7245C45.5815 23.8079 45.0331 23.855 44.4834 23.8654C43.0815 23.864 41.6908 23.6158 40.375 23.1322ZM51.645 12.9375L46.6971 0H34.8722L37.1435 15.0708C37.5863 17.917 40.6999 20.125 44.4834 20.125C48.5659 20.125 51.875 17.549 51.875 14.375C51.875 13.8748 51.7945 13.3975 51.645 12.9375Z" fill="white"/>
              </svg>                  
            <h4>Wikrama</h4>
            <p>e-Commnerce</p>
          </div>
          <img class="virtual-img" id="commenerce" height="unset" width="unset" src="{{asset('wk-frontend/')}}/assets/commerce.png" alt="commenerce">
        </div>

        <div class="learning" style="cursor: pointer" onclick="NewTab('{{$virtualWikrama->elearning}}')">
          <div class="text-ico-virtual">
            <svg width="unset" height="unset" viewBox="0 0 55 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 25.45V35.45L27.5 45L45 35.45V25.45L27.5 35L10 25.45ZM27.5 0L0 15L27.5 30L50 17.725V35H55V15L27.5 0Z" fill="white"/>
              </svg>                        
            <h4>Wikrama</h4>
            <p>e-Learning</p>
          </div>
          <img class="virtual-img" id="learning" height="unset" width="unset" src="{{asset('wk-frontend/')}}/assets/learning.png" alt="learning">
        </div>

        <div class="library" style="cursor: pointer" onclick="NewTab('{{$virtualWikrama->perpus}}')">
          <div class="text-ico-virtual">
            <svg width="unset" height="unset" viewBox="0 0 55 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 25.45V35.45L27.5 45L45 35.45V25.45L27.5 35L10 25.45ZM27.5 0L0 15L27.5 30L50 17.725V35H55V15L27.5 0Z" fill="white"/>
              </svg>                        
            <h4>Wikrama</h4>
            <p>Digital Library</p>
          </div>
          <img class="virtual-img" id="learning" height="unset" width="unset" src="{{asset('wk-frontend/')}}/assets/library.png" alt="Library">
        </div>
        
        
        <div class="library" style="cursor: pointer" onclick="NewTab('{{$virtualWikrama->mini_movie}}')">
          <div class="text-ico-virtual">
            <svg width="unset" height="unset" viewBox="0 0 55 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 25.45V35.45L27.5 45L45 35.45V25.45L27.5 35L10 25.45ZM27.5 0L0 15L27.5 30L50 17.725V35H55V15L27.5 0Z" fill="white"/>
              </svg>                        
            <h4>Wikrama</h4>
            <p>Mini Movie</p>
          </div>
          <img class="virtual-img" id="learning" height="unset" width="unset" src="{{asset('wk-frontend/')}}/assets/lapangaan.png" alt="Library">
        </div>
        
      </div>
    </div>
  </div>
@endsection

@section('galeri')
<div id="gallery-wk" class="judul-homepage">
  <h3>Gallery</h3>
  <div class="line-judul" id="gallery-judul-line"></div>
</div>

<div class="gallery">
  @foreach ($galeries as $item)
      
  <div class="grid1">
    <div class="grid1-content1">
      <img height="120%" width="auto" src="{{ asset('/uploads/images/' . $item->media) }}" alt="{{str()->title($item->title)}}">
    </div>
    <div class="grid1-content2">
      <p>
        {{str()->title($item->title)}}
      </p>
    </div>
  </div>
  @endforeach
</div>

@endsection