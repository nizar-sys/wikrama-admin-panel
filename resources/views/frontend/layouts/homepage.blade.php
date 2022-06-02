<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{\App\Models\Setting::first()->site_title}} - @yield('title')</title>
    
    <!-- bagian import -->
    <link rel="icon" href="{{asset('wk-frontend/')}}/assets/wikrama-logo.png" />
    <link rel="stylesheet" type="text/css" href="{{asset('wk-frontend/')}}/css/header.css">
    <script src="{{asset('wk-frontend/')}}/js/"></script>
    <link rel="stylesheet" href="{{asset('wk-frontend/')}}/css/homepage.css">


    <!-- ini font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    @yield('css')
</head>
<body>
    <!-- header css nya satu  -->
    <div class="header-wrap-texture">
        <img class="header-texture" src="{{asset('wk-frontend/')}}/assets/header-texture.png" height="unset" width="unset" alt="Texture">
        <div class="header">
            <div id="hamburger-icon-responsive">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 36V33H42V36ZM6 25.5V22.5H42V25.5ZM6 15V12H42V15Z"/></svg>
                  </a>
            </div>
            <div class="header-section-wrap">
                <div id="section-wrap">
                    <a href="">Teaching Factory</a>
                    <div id="indicator-section" class="indicator-section-one"></div>
                </div>
                <div id="section-wrap">
                    <a href="">Info Lowongan Kerja</a>
                    <div id="indicator-section" class="indicator-section-two"></div>
                </div>
                <div id="section-wrap">
                    <a href="">PPDB 2022-2023</a>
                    <div id="indicator-section" class="indicator-section-three"></div>
                </div>
                <div class="wikrama-logo">
                    <img src="{{asset('wk-frontend/')}}/assets/wikrama-logo.png" height="unset" width="unset" alt="Logo Wikrama">
                    <h3>SMK WIKRAMA BOGOR</h3>
                </div>
            </div>
            <div class="btn-header">
                <button class="btn-contact-us">Contact Us</button>
                <div class="btn-contact-search">
                    <label for="search">
                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7" cy="7" r="6" stroke="#001E42" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.2402 11.707L14.7643 15.2219" stroke="#001E42" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>   
                </label>  
                    <input type="text" name="search" id="input-search" placeholder="Search">     
                </div>
            </div>
        </div>
        <div class="header-below">
            <a href="" id="section-header-below" class="section-header-below-1">Home</a>
            <a href="" id="section-header-below" class="section-header-below-2">Discover Wikrama</a>
            <a href="" id="section-header-below" class="section-header-below-3">Major Competency</a>
            <a href="" id="section-header-below" class="section-header-below-4">Education Process</a>
            <a href="" id="section-header-below" class="section-header-below-5">Cultures</a>
            <a href="" id="section-header-below" class="section-header-below-6">Campus Resources</a>
            <a href="" id="section-header-below" class="section-header-below-7">BKK dan Alumni</a>
            <a href="" id="section-header-below" class="section-header-below-8">Berita</a>
        </div>
    </div>

    <!-- Homepage -->
    <div class="menu-section-slide">
      <div class="main-icon-menu-section-slide">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
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
            <p class="text-mid" id="text-mid">There is no Learning Community Without <span>Vission School Leadership<span></span></p>
          </div>
          <div class="text-last-wrap">
            <p class="text-last" id="text-last">Bogor</p>
          </div>
        </div>
      </div>
        <section class="carousel" aria-label="Gallery">  
          @yield('galeri-carousel')
        </section>
    </div>

    <div class="daftar-murid">
      <button class="btn-daftar-murid">Pendaftaran Siswa Baru  2022-2023</button>
      <div class="visitors-total">
        <div class="visitors">
          <h4>Visitors</h4>
          <h3>0000</h3>
        </div>
        <div class="mid-line"></div>
        <div class="total">
          <h4>Total</h4>
          <h3>000000</h3>
        </div>
        <div class="total"></div>
      </div>
    </div>

    <div class="wrap-berita">
      @yield('berita-acara')
      
      @yield('virtual-wikrama')

      @yield('galeri')
      
      <div id="informasi-lain" class="judul-homepage">
        <h3>Informasi Lain</h3>
        <div class="line-judul" id="informasi-judul-line"></div>
      </div>

      <div class="informasi-lain">
        <div class="list-informasi">
          <a id="list-style-informasi" href="">New Students</a>
          <a id="list-style-informasi" href="">Students</a>
          <a id="list-style-informasi" href="">Student Out of Town</a>
          <a id="list-style-informasi" href="">Parents</a>
          <a id="list-style-informasi" href="">Alumnies</a>
          <a id="list-style-informasi" href="">Companies</a>
          <a id="list-style-informasi" href="">Guest</a>
          <a id="list-style-informasi" href="">Internship</a>
        </div>
        <div class="isi-informasi">
          .
        </div>
      </div>
    
    </div>
    @yield('script')
  </body>
</html>