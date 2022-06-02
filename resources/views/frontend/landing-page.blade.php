@php
    $site_title = \App\Models\Setting::first()->site_title;
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{$site_title}} - @yield('title')</title>

        <!-- bagian import -->
        <link rel="icon" href="{{asset('frontend')}}/Assets/wikrama-logo.png" />
        <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/CSS/style.css">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/CSS/footer.css">

        <!-- ini font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body>
        <div class="wk-page">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <img src="" alt="Jumbotron">
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

            <!-- Content Image -->
            <div class="content-image" style="margin-top: 100px;">
                <div class="subcontent-image-3">
                    <div class="content-card">
                        <div class="content-image-page-3-2">
                            <img src="" class="pict-card" alt="Image">
                        </div>

                        <div class="content-text">
                            <h5>20 April 2022</h5>
                            
                            <h3 class="title-berita">Launching Kurikulum Bisnis Digital SMK Wikrama bersama Shopee</h3>

                            <a href="">
                                <button>Baca</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pagination"></div>
        </div>

        <footer>
            <div class="footer-top">
                <!-- Content Grid 1 -->
                <div class="footer-content">
                    <div class="footer-logo">
                        <img src="{{asset('frontend')}}/Assets/wikrama-logo.png" alt="Logo Wikrama">
                        <h3>{{$site_title}}</h3>
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
                <h3>Copyright &copy; {{date("Y") . ' - ' . $site_title}}. All Right Reserved</h3>
            </div>
        </footer>

        <!-- Script -->
        <script src="{{asset('frontend')}}/JavaScript/script.js"></script>
    </body>
</html>