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

    <div class="container">
        <div class="row text-center text-white">
            <h2 class="mt-2">Popular Books</h2>
            <hr class="solid">
        </div>
        <div class="row my-4 ms-5">
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.12o_Lzlr--S9f5Ou8EcwKAHaLF&pid=Api&P=0" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">The Dreams Of Art</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary w-100">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 ">
                <div class="card" style="width: 18rem;">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/371a8677505735.5c89695fc2798.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary w-100">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.awf3jF7bA3KVxShslw3W9AHaLc&pid=Api&P=0" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary w-100">Read</a>
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
