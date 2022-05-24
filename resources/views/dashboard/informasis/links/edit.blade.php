@extends('layouts.app')
@section('title', 'Ubah Data Informasi Links')

@section('title-header', 'Ubah Data Informasi Links')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('informasi-link.index') }}">Data Informasi Lainnya</a></li>
    <li class="breadcrumb-item active">Ubah Data Informasi Links</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Ubah Data Informasi Links</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('informasi-link.update', $informasiLink->id) }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                        placeholder="Judul Informasi Links" value="{{ $informasiLink->title }}" name="title">

                                    @error('title')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="url">Url</label>
                                    <input type="url" class="form-control @error('url') is-invalid @enderror"
                                        id="url" placeholder="Url Informasi Links" value="{{ $informasiLink->url }}"
                                        name="url">

                                    @error('url')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                        @php
                                            $stats = ['0', '1'];
                                        @endphp
                                        <option value="" selected>---Status---</option>
                                        @foreach ($stats as $status)
                                            <option value="{{ $status }}" @if ($informasiLink->status == $status) selected @endif>
                                                {{ $status == '0' ? 'Inactive' : 'Active' }}</option>
                                        @endforeach
                                    </select>
        
                                    @error('status')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="informasi_id">Informasi Parent</label>
                                    <select class="form-control @error('informasi_id') is-invalid @enderror" id="informasi_id" name="informasi_id">
                                        <option value="" selected>---Informasi Parent---</option>
                                        @foreach ($informasiLinks as $info)
                                            <option value="{{ $info->id }}" @if ($informasiLink->informasi_id == $info->id) selected @endif>
                                                {{ str()->title($info->title) }}</option>
                                        @endforeach
                                    </select>
        
                                    @error('informasi_id')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                <a href="{{route('informasi-link.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
