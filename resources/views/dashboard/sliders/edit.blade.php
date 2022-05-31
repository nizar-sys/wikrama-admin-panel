@extends('layouts.app')
@section('title', 'Ubah Data Slider')

@section('title-header', 'Ubah Data Slider')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('sliders.index') }}">Data Slider</a></li>
    <li class="breadcrumb-item active">Ubah Data Slider</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Ubah Data Slider</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('sliders.update', $slider->id) }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                        placeholder="Judul Slider" value="{{ $slider->title }}" name="title">

                                    @error('title')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="subtitle">SubJudul</label>
                                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle"
                                        placeholder="SubJudul Slider" value="{{ $slider->subtitle }}" name="subtitle">

                                    @error('subtitle')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                        @php
                                            $stats = ['0', '1'];
                                        @endphp
                                        <option value="" selected>---Status---</option>
                                        @foreach ($stats as $status)
                                            <option value="{{ $status }}" @if ($slider->status == $status) selected @endif>
                                                {{ $status == '0' ? 'Inactive' : 'Active' }}</option>
                                        @endforeach
                                    </select>
        
                                    @error('status')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="position">Position</label>
                                    <select class="form-control @error('position') is-invalid @enderror" id="position" name="position">
                                        @php
                                            $pos = ['left', 'right'];
                                        @endphp
                                        <option value="" selected>---Position---</option>
                                        @foreach ($pos as $position)
                                            <option value="{{ $position }}" @if ($slider->position == $position) selected @endif>
                                                {{ str()->title($position) }}</option>
                                        @endforeach
                                    </select>
        
                                    @error('position')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="media">Media</label>
                            <input type="file" class="dropify-media form-control @error('media') is-invalid @enderror dropify"
                                id="media" placeholder="Media Slider"
                                name="media">

                            @error('media')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                                <div class="d-block invalid-feedback">{{ 'Jangan upload file jika tidak ingin mengubah data sebelumnya' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                <a href="{{route('sliders.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
