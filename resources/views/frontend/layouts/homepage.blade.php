<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wikrama Bogor</title>
    
    <!-- bagian import -->
    <link rel="icon" href="{{asset('wk-frontend/')}}/assets/wikrama-logo.png" />
    <link rel="stylesheet" type="text/css" href="{{asset('wk-frontend/')}}/css/header.css">
    <script src="{{asset('wk-frontend/')}}/js/"></script>
    <link rel="stylesheet" href="{{asset('wk-frontend/')}}/css/homepage.css">


    <!-- ini font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
          <ol class="carousel__viewport">
            <div class="gradient-slide"></div>
              <li id="carousel__slide1"
                  tabindex="0"
                  class="carousel__slide">
                  <img src="{{asset('wk-frontend/')}}/assets/lapangaan.png" height="unset" width="unset" alt="lapangan">
                <div class="carousel__snapper">
                </div>
              </li>
              <li id="carousel__slide2"
                  tabindex="0"
                  class="carousel__slide">
                  <img src="{{asset('wk-frontend/')}}/assets/gedung-wikrama.png" height="unset" width="unset" alt="Gedung Wikrama">
                <div class="carousel__snapper"></div>
              </li>
              <li id="carousel__slide3"
                  tabindex="0"
                  class="carousel__slide">
                  <img src="{{asset('wk-frontend/')}}/assets/murid.png" height="unset" width="unset" alt="Murid Wikrama" class="img-murid">
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
                <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nulla nibh, tincidunt quis metus quis.</p>
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
                <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nulla nibh, tincidunt quis metus quis.</p>
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
                <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nulla nibh, tincidunt quis metus quis.</p>
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
                <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nulla nibh, tincidunt quis metus quis.</p>
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
                <p id="content-berita-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nulla nibh, tincidunt quis metus quis.</p>
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
                <svg width="unset" height="unset" viewBox="0 0 52 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.8536 15.0938L17.1278 0H5.3L0.357875 12.9375C0.2055 13.3975 0.125 13.8748 0.125 14.375C0.125 17.549 3.43125 20.125 7.51663 20.125C11.2829 20.125 14.3965 17.9285 14.8536 15.0938ZM26 20.125C30.0825 20.125 33.3916 17.549 33.3916 14.375C33.3916 14.2571 33.383 14.1393 33.3773 14.0271L31.9139 0H20.0861L18.6199 14.0156C18.6131 14.1353 18.6092 14.2551 18.6084 14.375C18.6084 17.549 21.9175 20.125 26 20.125ZM40.375 23.1322V34.5H11.625V23.1495C10.3658 23.6038 8.98 23.8625 7.51663 23.8625C6.956 23.8625 6.41262 23.7964 5.875 23.7216V41.975C5.875 44.1888 7.68337 46 9.89425 46H42.1C44.3138 46 46.125 44.1859 46.125 41.975V23.7245C45.5815 23.8079 45.0331 23.855 44.4834 23.8654C43.0815 23.864 41.6908 23.6158 40.375 23.1322ZM51.645 12.9375L46.6971 0H34.8722L37.1435 15.0708C37.5863 17.917 40.6999 20.125 44.4834 20.125C48.5659 20.125 51.875 17.549 51.875 14.375C51.875 13.8748 51.7945 13.3975 51.645 12.9375Z" fill="white"/>
                  </svg>                  
                <h4>Wikrama</h4>
                <p>e-Commnerce</p>
              </div>
              <img class="virtual-img" id="commenerce" height="unset" width="unset" src="{{asset('wk-frontend/')}}/assets/commerce.png" alt="commenerce">
            </div>

            <div class="learning">
              <div class="text-ico-virtual">
                <svg width="unset" height="unset" viewBox="0 0 55 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 25.45V35.45L27.5 45L45 35.45V25.45L27.5 35L10 25.45ZM27.5 0L0 15L27.5 30L50 17.725V35H55V15L27.5 0Z" fill="white"/>
                  </svg>                        
                <h4>Wikrama</h4>
                <p>e-Learning</p>
              </div>
              <img class="virtual-img" id="learning" height="unset" width="unset" src="{{asset('wk-frontend/')}}/assets/learning.png" alt="learning">
            </div>

            <div class="library">
              <div class="text-ico-virtual">
                <svg width="unset" height="unset" viewBox="0 0 55 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 25.45V35.45L27.5 45L45 35.45V25.45L27.5 35L10 25.45ZM27.5 0L0 15L27.5 30L50 17.725V35H55V15L27.5 0Z" fill="white"/>
                  </svg>                        
                <h4>Wikrama</h4>
                <p>Digital Library</p>
              </div>
              <img class="virtual-img" id="learning" height="unset" width="unset" src="{{asset('wk-frontend/')}}/assets/library.png" alt="Library">
            </div>
            
            
            <div class="library">
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

        <div id="gallery-wk" class="judul-homepage">
          <h3>Gallery</h3>
          <div class="line-judul" id="gallery-judul-line"></div>
        </div>

        <div class="gallery">
          <div class="grid1">
            <div class="grid1-content1">
              <img height="120%" width="auto" src="{{asset('wk-frontend/')}}/assets/grid1.png" alt="pak presiden">
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
              <img  height="120%" width="unset" src="{{asset('wk-frontend/')}}/assets/grid2.png" alt="Kunjungan Korea">
            </div>
          </div>
          <div class="grid3">
            <div class="grid3-content1">
              <img height="120%" width="unset" src="{{asset('wk-frontend/')}}/assets/grid3.png" alt="Murid wikrama">
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
              <img height="120%" width="unset" src="{{asset('wk-frontend/')}}/assets/grid4.png" alt="Walikota">
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
  </body>
</html>