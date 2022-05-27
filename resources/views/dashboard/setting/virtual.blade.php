@extends('layouts.app')
@section('title', 'App Settings')

@section('title-header', 'App Settings')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">App Settings</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir App Settings</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" role="form" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="ecommerce">E-commerce</label>
                            <input type="text" class="form-control @error('ecommerce') is-invalid @enderror" id="ecommerce"
                                placeholder="E-commerce" value="{{ old('ecommerce', $virtual->ecommerce) }}" name="ecommerce">

                            @error('ecommerce')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="elearning">E-learning</label>
                            <input type="text" class="form-control @error('elearning') is-invalid @enderror" id="elearning"
                                placeholder="E-learning" value="{{ old('elearning', $virtual->elearning) }}" name="elearning">

                            @error('elearning')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="mini_movie">Mini Movie</label>
                            <input type="text" class="form-control @error('mini_movie') is-invalid @enderror" id="mini_movie"
                                placeholder="Mini Movie" value="{{ old('mini_movie', $virtual->mini_movie) }}" name="mini_movie">

                            @error('mini_movie')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="perpus">E-library</label>
                            <input type="text" class="form-control @error('perpus') is-invalid @enderror" id="perpus"
                                placeholder="E-library" value="{{ old('perpus', $virtual->perpus) }}" name="perpus">

                            @error('perpus')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
