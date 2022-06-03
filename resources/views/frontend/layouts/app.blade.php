@php
    $siteSetting = \App\Models\Setting::first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$siteSetting->site_title}} - @yield('title')</title>
    
    <!-- bagian import -->
    <link rel="icon" href="{{asset('wk-frontend/')}}/assets/wikrama-logo.png" />
    <link rel="stylesheet" type="text/css" href="{{asset('wk-frontend/')}}/css/header.css">
    <link rel="stylesheet" href="{{asset('wk-frontend/')}}/css/homepage.css">
    <!-- bagian import -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend') }}/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend') }}/CSS/teaching-factory.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend') }}/CSS/footer.css">


    <!-- ini font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{ asset('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/assets/css//snackbar.min.css') }}">
    <script src="{{ asset('/assets/js/snackbar.min.js') }}"></script>
    @yield('styles')
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
            <a href="/" id="section-header-below" class="section-header-below-1">Home</a>
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
        @yield('galeri-carousel')
    </div>

    @yield('content-main')
    @yield('content')

    @yield('daftar-mhs-baru')

    <div class="wrap-berita">
      @yield('berita-acara')
      
      @yield('virtual-wikrama')

      @yield('galeri')
      
      @yield('informasi-lain')
    </div>


    <footer>
      <div class="footer-top">
          <!-- Content Grid 1 -->
          <div class="footer-content">
              <div class="footer-logo">
                  <img src="{{ asset('/frontend') }}/Assets/wikrama-logo.png" alt="Logo Wikrama">
                  <h3>{{$siteSetting->site_title}}</h3>
              </div>

              <div class="footer-alamat">
                  <h4>Alamat</h4>
                  <a target="_blank" href="https://www.google.com/maps/place/Wikrama+Bogor+Vocational+School/@-6.6452587,106.8438312,15z/data=!4m5!3m4!1s0x0:0x307fc4a38e65fa2b!8m2!3d-6.6453711!4d106.8438536">
                      Jl. Raya Wangun <br> 
                      Kelurahan Sindangsari <br>
                      Bogor Timur 16720
                  </a>
              </div>

              <div class="footer-telepon">
                  <h4>Telepon</h4>
                  <p>
                      <a href="">0251-8242411</a>&nbsp;
                      /&nbsp;
                      <a href="">082221718035</a><br>
                      <a href="">(Whatsapp)</a>
                  </p>
              </div>

              <div class="footer-sosmed">
                  <li></li><a href="{{$siteSetting->fb}}"><i class="fa-brands fa-facebook-square"></i></a></li>
                  <li></li><a href="{{$siteSetting->twt}}"><i class="fa-brands fa-twitter-square"></i></a></li>
                  <li></li><a href="{{$siteSetting->ig}}"><i class="fa-brands fa-instagram-square"></i></a></li>
                  <li></li><a href="{{$siteSetting->yt}}"><i class="fa-brands fa-youtube-square"></i></a></li>
              </div>
          </div>

          <!-- Content Grid 2 -->
          <div class="footer-content footer-content-about">
              <h4>Tentang Wikrama</h4>
              
              <li><a href="">Sejarah</a></li>
              <li><a href="">Peraturan Sekolah</a></li>
              <li><a href="">Rencana Strategi & Prestasi</a></li>
              <li><a href="">Yayasan</a></li>
              <li><a href="">Struktur Organisasi</a></li>
              <li><a href="">Cabang</a></li>
              <li><a href="">Penghargaan</a></li>
              <li><a href="">Kerjasama</a></li>
          </div>

          <div class="footer-content footer-content-hidden"></div>

          <!-- Content Grid 3 -->
          <div class="footer-content footer-content-chat">
              <div class="chat-content">
                  <h4>Pesan</h4>

                  <div class="form-content">
                      <form action="#" onsubmit="postMessage()">
                          <input type="text" name="name" placeholder="Nama..." required>
                          <input type="email" name="email" placeholder="Email..." required>
                          <textarea name="pesan" placeholder="Pesan Anda..." required></textarea><br>
                          <button type="submit">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <div class="copyright">
          <h3>Copyright &copy; {{date("Y") . ' - ' . $siteSetting->site_title}}. All Right Reserved</h3>
      </div>
    </footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('script') 
    <script>
        function postMessage() {
            event.preventDefault();
            Snackbar.show({
                text: "Mengirim Pesan...",
                backgroundColor: '#17a2b8',
                actionTextColor: '#212529',
            })
            var name = $('input[name="name"]').val();
            var email = $('input[name="email"]').val();
            var message = $('textarea[name="pesan"]').val();

            $.ajax({
                url: "{{ route('messages.store') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    name,
                    email,
                    message
                },
                success: function(data) {
                    Swal.fire({
                        title: 'Pesan Terkirim',
                        text: 'Terima kasih atas pesan anda',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                },
                error: function(data) {
                    Swal.fire({
                        title: 'Pesan Gagal',
                        text: 'Pesan anda gagal terkirim',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                },
            })

            // ajax onload
            $('input[name="name"]').val('');
            $('input[name="email"]').val('');
            $('textarea[name="pesan"]').val('');

            return false;
        }
    </script>
  </body>
</html>