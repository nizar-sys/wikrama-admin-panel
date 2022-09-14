<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wikrama Bogor</title>

    <!-- bagian import -->
    <link rel="icon" href="{{ asset('/frontend') }}/assets/wikrama-logo.png" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend') }}/css/header.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/homepage.css">



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
</head>
<!-- header css nya satu  -->
<header>
    <div class="header-wrap-texture">
        <img class="header-texture" src="{{ asset('/frontend') }}/assets/header-texture.png" height="unset" width="unset" alt="Texture">
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
                    <img src="{{ asset('/frontend') }}/assets/wikrama-logo.png" height="unset" width="unset" alt="Logo Wikrama">
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
            <div class="header-below">
                <a href="" id="section-header-below-home" class="section-header-below">Home</a>
                <a href="" id="section-header-below-discovery" class="section-header-below">Discover Wikrama</a>
                <a href="" id="section-header-below-major-competency" class="section-header-below">Major
                    Competency</a>
                <a href="" id="section-header-below-education" class="section-header-below">Education Process</a>
                <a href="" id="section-header-below-cultures" class="section-header-below">Cultures</a>
                <a href="" id="section-header-below-campus" class="section-header-below">Campus Resources</a>
                <a href="" id="section-header-below-bkk" class="section-header-below">BKK dan Alumni</a>
                <a href="" id="section-header-below-berita" class="section-header-below">Berita</a>
            </div>
            <div class="child-header-below">
                <div class="anak-discovery">
                    <div class="semua-anak">
                        <a href="#" class="anak">
                            <h3>Peraturan Sekolah</h3>
                            <p>Peraturan sekolah Di SMK wikrama Bogor</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Rencana Strategi & Prestasi</h3>
                            <p>Rencana strategi dan prestasi di SMK Wikrama Bogor</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Yayasan</h3>
                            <p>Yayasan Prawitama</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>School Alliance</h3>
                            <p>Jaringan SMK Wikrama di Indonesia</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Penghargaan</h3>
                            <p>Penghargaan Sekolah</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Kerjasama</h3>
                            <p>Kerjasama dengan DUDI</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Tertimonial</h3>
                            <p>Tertimonial</p>
                        </a>
                    </div>
                </div>

                <div class="anak-major">
                    <div class="semua-anak">
                        <a href="#" class="anak">
                            <h3>Competence in General Performance</h3>
                            <p>Competence in General Performance</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Otomatisasi dan Tata Kelola Perkantoran</h3>
                            <p>Otomatisasi dan Tata Kelola Perkantoran</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Teknik Komputer dan Jaringan</h3>
                            <p>Teknik Komputer dan Jaringan</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Rekayasa Perangkat Lunak</h3>
                            <p>Rekayasa Perangkat Lunak</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Multimedia</h3>
                            <p>Multimedia</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Bisnis Daring dan Pemasaran</h3>
                            <p>Bisnis Daring dan Pemasaran</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Tata Boga</h3>
                            <p>Tata Boga</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Perhotelan</h3>
                            <p>Perhotelan</p>
                        </a>
                    </div>
                </div>

                <div class="anak-education">
                    <div class="semua-anak">
                        <a href="#" class="anak">
                            <h3>School Calendar</h3>
                            <p>School Calendar</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Eduction Process</h3>
                            <p>Proses Akademik di SMK Wikrama Bogor</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>School Introduction</h3>
                            <p>School Introduction</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Parentship</h3>
                            <p>Parentship</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>First Year</h3>
                            <p>First Year : Learning to know & to be</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Second Year</h3>
                            <p>Second Year : learning to do</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Third Year</h3>
                            <p>Third Year : learning to life together</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Wrap up and Graduation</h3>
                            <p>Wrap up and Graduation</p>
                        </a>
                    </div>
                </div>

                <div class="anak-cultures">
                    <div class="semua-anak">
                        <a href="#" class="anak">
                            <h3>Wikrama's Values</h3>
                            <p>Wikrama's Values as basic of character building</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Wikrama's Way of Life</h3>
                            <p>Wikrama's Way of Life</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Service Excellence</h3>
                            <p>Service Excellence</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Teacher Leadership & Learning Community</h3>
                            <p>Teacher Leadership & Learning Community</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Learning Management</h3>
                            <p>Learning Management</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Student Leadership and Life Skill</h3>
                            <p>Ekstrakulikuler</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Highlight and ESD Programs</h3>
                            <p>Highlight and ESD Programs</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Beasiswa</h3>
                            <p>Beasiswa</p>
                        </a>
                    </div>
                </div>

                <div class="anak-campus">
                    <div class="semua-anak">
                        <a href="#" class="anak">
                            <h3>Scholarship</h3>
                            <p>Scholarship</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Supporting Academic Staff</h3>
                            <p>Staff</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Library and Learning Resource</h3>
                            <p>Library</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Building and School Facilities</h3>
                            <p>school facilities</p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Karya Guru</h3>
                            <p></p>
                        </a>

                    </div>
                </div>

                <div class="anak-bkk">
                    <div class="semua-anak">
                        <a href="#" class="anak">
                            <h3>Info Lowongan Kerja Alumni</h3>
                            <p></p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Tracer Study</h3>
                            <p></p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Data Keterserapan Alumni</h3>
                            <p></p>
                        </a>

                    </div>
                </div>

                <div class="anak-berita">
                    <div class="semua-anak">
                        <a href="#" class="anak">
                            <h3>Data Keterserapan Alumni</h3>
                            <p></p>
                        </a>

                        <a href="#" class="anak">
                            <h3>Selamat Tahun Baru Islam 1 Muharram 1442 Hijriyah</h3>
                            <p></p>
                        </a>


                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<body>

    <!-- Homepage -->
    <div class="menu-section-slide">
        <div class="main-icon-menu-section-slide">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
            </svg>
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
                    <p class="text-mid" id="text-mid">There is no Learning Community Without <span>Vission School
                            Leadership<span></span></p>
                </div>
                <div class="text-last-wrap">
                    <p class="text-last" id="text-last">Bogor</p>
                </div>
            </div>
        </div>
        <section class="carousel" aria-label="Gallery">
            <ol class="carousel__viewport">
                <div class="gradient-slide"></div>
                <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                    <img src="{{ asset('/frontend') }}/assets/lapangaan.png" height="unset" width="unset" alt="lapangan">
                    <div class="carousel__snapper">
                    </div>
                </li>
                <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                    <img src="{{ asset('/frontend') }}/assets/gedung-wikrama.png" height="unset" width="unset" alt="Gedung Wikrama">
                    <div class="carousel__snapper"></div>
                </li>
                <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                    <img src="{{ asset('/frontend') }}/assets/murid.png" height="unset" width="unset" alt="Murid Wikrama"
                        class="img-murid">
                    <div class="carousel__snapper"></div>
                </li>
            </ol>
            <!-- <aside class="carousel__navigation">
              <ol class="carousel__navigation-list">
                <li class="carousel__navigation-item">
                  <a href="#carousel__slide1"
                     class="carousel__navigation-button">Go to slide 1</a>
                </li>
                <li class="carousel__navigation-item">
                  <a href="#carousel__slide2"
                     class="carousel__navigation-button">Go to slide 2</a>
                </li>
                <li class="carousel__navigation-item">
                  <a href="#carousel__slide3"
                     class="carousel__navigation-button">Go to slide 3</a>
                </li>
              </ol> -->
            </aside>
        </section>
    </div>

    <div class="daftar-murid">
        <button class="btn-daftar-murid">Pendaftaran Siswa Baru 2022-2023</button>
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
    </div>

    <div class="wrap-berita">
        <div class="judul-homepage">
            <h3>Berita Terikini</h3>
            <div class="line-judul"></div>
        </div>

        <div class="berita-berita">

            <div class="berita-terbaru">
                <div class="content-berita">
                    <div class="container-berita">
                        <img src="" alt="Berita">
                        <div class="tanggal-berita">
                            <p>01</p>
                            <p>Januari</p>
                            <p>2022</p>
                        </div>
                        <div class="content-berita-text">
                            <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <button id="content-berita-btn">Baca</button>
                    </div>
                </div>
            </div>


            <div class="berita-terbaru">
                <div class="content-berita">
                    <div class="container-berita">
                        <img src="" alt="Berita">
                        <div class="tanggal-berita">
                            <p>01</p>
                            <p>Januari</p>
                            <p>2022</p>
                        </div>
                        <div class="content-berita-text">
                            <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                nulla nibh, tincidunt quis metus quis.</p>
                        </div>
                        <button id="content-berita-btn">Baca</button>
                    </div>
                </div>
            </div>

            <div class="berita-terbaru">
                <div class="content-berita">
                    <div class="container-berita">
                        <img src="" alt="Berita">
                        <div class="tanggal-berita">
                            <p>01</p>
                            <p>Januari</p>
                            <p>2022</p>
                        </div>
                        <div class="content-berita-text">
                            <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                nulla nibh, tincidunt quis metus quis.</p>
                        </div>
                        <button id="content-berita-btn">Baca</button>
                    </div>
                </div>
            </div>

            <div class="berita-terbaru">
                <div class="content-berita">
                    <div class="container-berita">
                        <img src="" alt="Berita">
                        <div class="tanggal-berita">
                            <p>01</p>
                            <p>Januari</p>
                            <p>2022</p>
                        </div>
                        <div class="content-berita-text">
                            <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                nulla nibh, tincidunt quis metus quis.</p>
                        </div>
                        <button id="content-berita-btn">Baca</button>
                    </div>
                </div>
            </div>

            <div class="berita-terbaru">
                <div class="content-berita">
                    <div class="container-berita">
                        <img src="" alt="Berita">
                        <div class="tanggal-berita">
                            <p>01</p>
                            <p>Januari</p>
                            <p>2022</p>
                        </div>
                        <div class="content-berita-text">
                            <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                nulla nibh, tincidunt quis metus quis.</p>
                        </div>
                        <button id="content-berita-btn">Baca</button>
                    </div>
                </div>
            </div>

            <div class="berita-terbaru">
                <div class="content-berita">
                    <div class="container-berita">
                        <img src="" alt="Berita">
                        <div class="tanggal-berita">
                            <p>01</p>
                            <p>Januari</p>
                            <p>2022</p>
                        </div>
                        <div class="content-berita-text">
                            <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                nulla nibh, tincidunt quis metus quis.</p>
                        </div>
                        <button id="content-berita-btn">Baca</button>
                    </div>
                </div>
            </div>
        </div>

        <center><a id="next-page-a" href="">Baca Semua</a></center>
    </div>

    <div id="virtual-wk" class="judul-homepage">
        <h3>Virtual Wikrama</h3>
        <div class="line-judul" id="virtual-wikrama-judul-line"></div>
    </div>

    <div class="virtual-wikrama">
        <div class="gradient-virtual"></div>
        <div class="select-virtual">
            <div class="commerce">
                <div class="text-ico-virtual">
                    <svg width="unset" height="unset" viewBox="0 0 52 46" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.8536 15.0938L17.1278 0H5.3L0.357875 12.9375C0.2055 13.3975 0.125 13.8748 0.125 14.375C0.125 17.549 3.43125 20.125 7.51663 20.125C11.2829 20.125 14.3965 17.9285 14.8536 15.0938ZM26 20.125C30.0825 20.125 33.3916 17.549 33.3916 14.375C33.3916 14.2571 33.383 14.1393 33.3773 14.0271L31.9139 0H20.0861L18.6199 14.0156C18.6131 14.1353 18.6092 14.2551 18.6084 14.375C18.6084 17.549 21.9175 20.125 26 20.125ZM40.375 23.1322V34.5H11.625V23.1495C10.3658 23.6038 8.98 23.8625 7.51663 23.8625C6.956 23.8625 6.41262 23.7964 5.875 23.7216V41.975C5.875 44.1888 7.68337 46 9.89425 46H42.1C44.3138 46 46.125 44.1859 46.125 41.975V23.7245C45.5815 23.8079 45.0331 23.855 44.4834 23.8654C43.0815 23.864 41.6908 23.6158 40.375 23.1322ZM51.645 12.9375L46.6971 0H34.8722L37.1435 15.0708C37.5863 17.917 40.6999 20.125 44.4834 20.125C48.5659 20.125 51.875 17.549 51.875 14.375C51.875 13.8748 51.7945 13.3975 51.645 12.9375Z"
                            fill="white" />
                    </svg>
                    <h4>Wikrama</h4>
                    <p>e-Commnerce</p>
                </div>
                <img class="virtual-img" id="commenerce" height="unset" width="unset" src="{{ asset('/frontend') }}/assets/commerce.png"
                    alt="commenerce">
            </div>

            <div class="learning">
                <div class="text-ico-virtual">
                    <svg width="unset" height="unset" viewBox="0 0 55 45" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 25.45V35.45L27.5 45L45 35.45V25.45L27.5 35L10 25.45ZM27.5 0L0 15L27.5 30L50 17.725V35H55V15L27.5 0Z"
                            fill="white" />
                    </svg>
                    <h4>Wikrama</h4>
                    <p>e-Learning</p>
                </div>
                <img class="virtual-img" id="learning" height="unset" width="unset" src="{{ asset('/frontend') }}/assets/learning.png"
                    alt="learning">
            </div>

            <div class="library">
                <div class="text-ico-virtual">
                    <svg width="39" height="43" viewBox="0 0 39 43" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.52585 34.4H38.75V4.3C38.75 3.15957 38.297 2.06585 37.4906 1.25944C36.6842 0.453034 35.5905 0 34.4501 0H6.50005C3.90715 0 0.0500488 1.71785 0.0500488 6.45V36.55C0.0500488 41.2822 3.90715 43 6.50005 43H38.75V38.7H6.52585C5.53255 38.6742 4.35005 38.2808 4.35005 36.55C4.35005 34.8193 5.53255 34.4258 6.52585 34.4ZM10.8 8.6H30.1501V12.9H10.8V8.6Z"
                            fill="white" />
                    </svg>
                    <h4>Wikrama</h4>
                    <p>Digital Library</p>
                </div>
                <img class="virtual-img" id="learning" height="unset" width="unset" src="{{ asset('/frontend') }}/assets/library.png"
                    alt="Library">
            </div>


            <div class="library">
                <div class="text-ico-virtual">
                    <svg width="50" height="45" viewBox="0 0 50 45" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M40 20C40 17.6025 38.3 15.5975 36.0475 15.115C36.9475 13.6125 37.5 11.875 37.5 10C37.5 4.485 33.015 0 27.5 0C23.71 0 20.445 2.1425 18.75 5.26C17.055 2.1425 13.79 0 10 0C4.485 0 0 4.485 0 10C0 12.255 0.78 14.315 2.0425 15.99C1.41132 16.4513 0.897556 17.0546 0.542732 17.7513C0.187908 18.4479 0.00198656 19.2182 0 20V40C0 42.7575 2.2425 45 5 45H35C37.7575 45 40 42.7575 40 40V33.4075L50 38.4075V20.9075L40 25.9075V20ZM27.5 5C30.2575 5 32.5 7.2425 32.5 10C32.5 12.7575 30.2575 15 27.5 15C24.7425 15 22.5 12.7575 22.5 10C22.5 7.2425 24.7425 5 27.5 5ZM10 5C12.7575 5 15 7.2425 15 10C15 12.7575 12.7575 15 10 15C7.2425 15 5 12.7575 5 10C5 7.2425 7.2425 5 10 5Z"
                            fill="white" />
                    </svg>
                    <h4>Wikrama</h4>
                    <p>Mini Movie</p>
                </div>
                <img class="virtual-img" id="learning" height="unset" width="unset" src="{{ asset('/frontend') }}/assets/lapangaan.png"
                    alt="Library">
            </div>

        </div>
    </div>

    <div id="gallery-wk" class="judul-homepage">
        <h3>Gallery</h3>
        <div class="line-judul" id="gallery-judul-line"></div>
    </div>

    <div class="gallery">
        <div class="grid1">
            <div class="grid1-content1">
                <img height="120%" width="auto" src="{{ asset('/frontend') }}/assets/grid1.png" alt="pak presiden">
            </div>
            <div class="grid1-content2">
                <p>Penghargaan dari Presiden RI Tahun 2012</p>
            </div>
        </div>
        <div class="grid2">
            <div class="grid2-content1">
                <p>Tamu dari Korea Selatan</p>
            </div>
            <div class="grid2-content2">
                <img height="120%" width="unset" src="{{ asset('/frontend') }}/assets/grid2.png" alt="Kunjungan Korea">
            </div>
        </div>
        <div class="grid3">
            <div class="grid3-content1">
                <img height="120%" width="unset" src="{{ asset('/frontend') }}/assets/grid3.png" alt="Murid wikrama">
            </div>
            <div class="grid3-content2">
                <p>An Excellent Generation Start Here</p>
            </div>
        </div>
        <div class="grid4">
            <div class="grid4-content1">
                <p>Kunjungan Walikota Bogor</p>
            </div>
            <div class="grid4-content2">
                <img height="120%" width="unset" src="{{ asset('/frontend') }}/assets/grid4.png" alt="Walikota">
            </div>
        </div>
    </div>
    </div>

    <div id="informasi-lain" class="judul-homepage">
        <h3>Informasi Lain</h3>
        <div class="line-judul" id="informasi-judul-line"></div>
    </div>

    <div class="informasi-lain">
        <div class="list-informasi">
            <label class="pilih-list-wrap">
                New Student
                <input checked="checked" type="radio" name="radio" id="new-student">
                <span class="active-list">
                    New Student
                </span>
            </label>
            <label class="pilih-list-wrap">
                Student
                <input type="radio" name="radio" id="student">
                <span class="active-list">
                    Student
                </span>
            </label>
            <label class="pilih-list-wrap">
                Student Out of Town
                <input type="radio" name="radio" id="student-out-of-town">
                <span class="active-list">
                    Student Out of Town
                </span>
            </label>
            <label class="pilih-list-wrap">
                Parents
                <input type="radio" name="radio" id="parents">
                <span class="active-list">
                    Parents
                </span>
            </label>
            <label class="pilih-list-wrap">
                Alumnies
                <input type="radio" name="radio" id="alumnies">
                <span class="active-list">
                    Alumnies
                </span>
            </label>
            <label class="pilih-list-wrap">
                Companies
                <input type="radio" name="radio" id="companies">
                <span class="active-list">
                    Companies
                </span>
            </label>
            <label class="pilih-list-wrap">
                Guest
                <input type="radio" name="radio" id="guest">
                <span class="active-list">
                    Guest
                </span>
            </label>
            <label class="pilih-list-wrap">
                Internship
                <input type="radio" name="radio" id="internship">
                <span class="active-list">
                    Internship
                </span>
            </label>
        </div>
    </div>
    <div class="isi-informasi">
        <div class="line-informasi"></div>
        <div class="isian-informasi">
            <div class="left-side">
                <img id="img-isi-informasi" height="100%" width="auto" src="{{ asset('/frontend') }}/assets/lapangaan.png"
                    alt="lapangan">
            </div>
            <div class="right-side">
                <h3>Pendaftaran Beasiswa</h3>
                <a>www-inilinknya.com</a>
                <p>Lorem ipsum dolor sit amet. Sed rerum adipisci quo quidem voluptas et saepe reprehenderit aut officia
                    omnis et aliquam sequi et quia necessitatibus a dicta sunt. Et aliquid voluptatum vel voluptatem
                    dolorem et voluptatum dignissimos qui dolorem expedita est molestiae reprehenderit ex commodi omnis
                    et vero.</p>
                <button>button</button>
            </div>
        </div>
    </div>
    </div>

    <div id="pesan" class="judul-homepage">
        <h3>Pesan</h3>
        <div class="line-judul" id="pesan-judul-line"></div>
    </div>

    <div class="pesan">
        <div class="page-changer">
            <a href="#" class="sebelumnya-pesan">
                <svg xmlns="http://www.w3.org/2000/svg" height="38" width="38">
                    <path d="M28.05 36 16 23.95 28.05 11.9 30.2 14.05 20.3 23.95 30.2 33.85Z" />
                </svg>
            </a>
            <a href="#" class="next-pesan">
                <svg xmlns="http://www.w3.org/2000/svg" height="38" width="38">
                    <path d="M18.75 36 16.6 33.85 26.5 23.95 16.6 14.05 18.75 11.9 30.8 23.95Z" />
                </svg>
            </a>
        </div>
        <div class="semua-pesan">
            <div class="container-pesan">
                <div class="wrap-isi-pesan">
                    <p>Salam. ibu-bapak, terimakasih atas sambutan hangat nan meriah dari SMK Wikrama saat Tim MCCI
                        berkunjung kesana februari 2016. Wikrama pancen siiip. Terimakasih sharing ilmunya. Wassalam
                    </p>
                </div>
                <h4>m. muntaha,sag.</h4>
            </div>

            <div class="container-pesan">
                <div class="wrap-isi-pesan">
                    <p>Yth SMK Wikrama,<br><br>
                        Saya membutuhkan tenaga kerja dengan lulusan RPL, tenaga junior developer di tempat kami.
                        terima kasih syamsul rahman</p>
                </div>
                <h4>syamsul</h4>
            </div>

            <div class="container-pesan">
                <div class="wrap-isi-pesan">
                    <p>Lorem ipsum dolor sit amet. Sed rerum adipisci quo quidem voluptas et saepe reprehenderit aut
                        officia omnis et aliquam sequi et quia necessitatibus a dicta sunt. Et aliquid voluptatum vel
                        voluptatem dolorem et voluptatum dignissimos qui dolorem expedita est molestiae reprehenderit ex
                        commodi omnis et vero Lorem ipsum dolor sit amet. Sed rerum adipisci quo quidem voluptas et
                        saepe reprehenderit aut officia omnis et aliquam sequi et quia necessitatibus a dicta sunt. Et
                        aliquid voluptatum vel voluptatem dolorem et voluptatum dignissimos qui dolorem expedita est
                        molestiae reprehenderit ex commodi omnis et vero</p>
                </div>
                <h4>Nama Orang</h4>
            </div>

            <div class="container-pesan">
                <div class="wrap-isi-pesan">
                    <p>Mohon cantumkan sekalian besarnya biaya masuk dan biaya lainnya, utk pendaftaran masuk SMK
                        Wikrama.
                        <br><br>
                        Tq
                    </p>
                </div>
                <h4>tino rafashiano</h4>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-top">
            <!-- Content Grid 1 -->
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="{{ asset('/frontend') }}/Assets/wikrama-logo.png" alt="Logo Wikrama">
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

    <script src="{{ asset('/frontend') }}/js/uiSystem.js"></script>
</body>

</html>
