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
                    <p class="text-mid" id="text-mid">There is no Learning Community Without <span>Vission School
                            Leadership<span></span></p>
                </div>
                <div class="text-last-wrap">
                    <p class="text-last" id="text-last">Bogor</p>
                </div>
            </div>
        </div>
        <section class="carousel" style="height: 60vh" aria-label="Gallery">
            <ol class="carousel__viewport" id="carousel-data">
                <div class="gradient-slide"></div>
            </ol>
        </section>
    </div>

    <div class="daftar-murid">
        <button class="btn-daftar-murid">Pendaftaran Siswa Baru 2022-2023</button>
        <div class="visitors-total">
            <div class="visitors">
                <h4>Visitors</h4>
                <h3 id="visitor-today">0000</h3>
            </div>
            <div class="mid-line"></div>
            <div class="total">
                <h4>Total</h4>
                <h3 id="visitor-total">0000</h3>
            </div>
            <div class="total"></div>
        </div>
    </div>

    <div class="wrap-berita" id="news-wrapper">
        <div class="judul-homepage">
            <h3>Berita Terikini</h3>
            <div class="line-judul"></div>
        </div>

        <div class="berita-berita" id="news-data"></div>

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
                    <x-icon type="ecommerce" classicon="" />
                    <h4>Wikrama</h4>
                    <p>e-Commnerce</p>
                </div>
                <img class="virtual-img" id="commenerce" height="unset" width="unset"
                    src="{{ asset('/frontend') }}/assets/commerce.png" alt="commenerce">
            </div>

            <div class="learning">
                <div class="text-ico-virtual">
                    <x-icon type="elearning" classicon="" />
                    <h4>Wikrama</h4>
                    <p>e-Learning</p>
                </div>
                <img class="virtual-img" id="learning" height="unset" width="unset"
                    src="{{ asset('/frontend') }}/assets/learning.png" alt="learning">
            </div>

            <div class="library">
                <div class="text-ico-virtual">
                    <x-icon type="book" classicon="" />
                    <h4>Wikrama</h4>
                    <p>Digital Library</p>
                </div>
                <img class="virtual-img" id="learning" height="unset" width="unset"
                    src="{{ asset('/frontend') }}/assets/library.png" alt="Library">
            </div>


            <div class="library">
                <div class="text-ico-virtual">
                    <x-icon type="evirtual" classicon="" />
                    <h4>Wikrama</h4>
                    <p>Mini Movie</p>
                </div>
                <img class="virtual-img" id="learning" height="unset" width="unset"
                    src="{{ asset('/frontend') }}/assets/lapangaan.png" alt="Library">
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
                <img height="120%" width="unset" src="{{ asset('/frontend') }}/assets/grid2.png"
                    alt="Kunjungan Korea">
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
                <img id="img-isi-informasi" height="100%" width="auto"
                    src="{{ asset('/frontend') }}/assets/lapangaan.png" alt="lapangan">
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

    <div id="pesan" class="judul-homepage">
        <h3>Pesan</h3>
        <div class="line-judul" id="pesan-judul-line"></div>
    </div>

    <div class="pesan">
        <div class="page-changer">
            <a href="#" class="sebelumnya-pesan">
                <x-icon type="prev" classicon=""></x-icon>
            </a>
            <a href="#" class="next-pesan">
                <x-icon type="next" classicon=""></x-icon>
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
@endsection

@push('script')
    <script>
        let assetsUrl = "{{ asset('/uploads/images/') }}"
    </script>
    <script src="{{ mix('/js/frontend/landing/script.js') }}"></script>
@endpush
