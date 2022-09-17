<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SMK Wikrama Bogor @yield('title')</title>

    <!-- bagian import -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('/frontend/assets/wikrama-logo.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/header.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/frontend/css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/loading.css') }}">



    <!-- ini font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('css')
</head>
<!-- header css nya satu  -->
<header>
    <div class="header-wrap-texture">
        <img class="header-texture" src="{{ asset('/frontend/assets/header-texture.png') }}">
        <div class="header">
            <div id="hamburger-icon-responsive">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                        <path d="M6 36V33H42V36ZM6 25.5V22.5H42V25.5ZM6 15V12H42V15Z" />
                    </svg>
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
                    <img src="{{ asset('/frontend/assets/wikrama-logo.png') }}" height="unset" width="unset"
                        alt="Logo Wikrama">
                    <h3>SMK WIKRAMA BOGOR</h3>
                </div>
            </div>
            <div class="btn-header">
                <button class="btn-contact-us">Contact Us</button>
                <div class="btn-contact-search">
                    <label for="search">
                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7" cy="7" r="6" stroke="#001E42" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.2402 11.707L14.7643 15.2219" stroke="#001E42" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                    <input type="text" name="search" id="input-search" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="anak-header-dan-headernya">
            <div class="header-below" id="header-menus">
                <a href="" class="section-header-below active-head-menu">Home</a>
            </div>

            <div class="child-header-below" id="child-header-menus"></div>
        </div>
    </div>
</header>

<body>
    <div class="loading-content"></div>

    @yield('content')

    <footer>
        <div class="footer-top">
            <!-- Content Grid 1 -->
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="{{ asset('/frontend/assets/wikrama-logo.png') }}" alt="Logo Wikrama">
                    <h3>SMK WIKRAMA<br>BOGOR</h3>
                </div>

                <div class="footer-alamat">
                    <h4>Alamat</h4>
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Wikrama+Bogor+Vocational+School/@-6.6452587,106.8438312,15z/data=!4m5!3m4!1s0x0:0x307fc4a38e65fa2b!8m2!3d-6.6453711!4d106.8438536">
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
                    <li></li><a href=""><i class="fa-brands fa-facebook-square"></i></a></li>
                    <li></li><a href=""><i class="fa-brands fa-twitter-square"></i></a></li>
                    <li></li><a href=""><i class="fa-brands fa-instagram-square"></i></a></li>
                    <li></li><a href=""><i class="fa-brands fa-youtube-square"></i></a></li>
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
                        <form action="">
                            <input type="text" name="" placeholder="Nama..." required>
                            <input type="email" name="" placeholder="Email..." required>
                            <textarea name="" placeholder="Pesan Anda..." required></textarea><br>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <h3>Copyright &copy; 2022 - SMK Wikrama Bogor. All Right Reserved</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        let baseUrl = "{{ url('/') }}";
    </script>
    <script src="{{ mix('/js/header-menu.js') }}"></script>
    @stack('script')
</body>

</html>
