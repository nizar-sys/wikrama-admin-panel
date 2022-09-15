@extends('layouts.app')
@section('title', 'Ubah Data Pages')

@section('title-header', 'Ubah Data Pages')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Data Pages</a></li>
    <li class="breadcrumb-item active">Ubah Data Pages</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Ubah Data Pages</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('pages.update', $page->id) }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                        placeholder="Judul Pages" value="{{ $page->title }}" name="title">

                                    @error('title')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="subtitle">SubJudul</label>
                                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle"
                                        placeholder="SubJudul Pages" value="{{ $page->subtitle }}" name="subtitle">

                                    @error('subtitle')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link"
                                        placeholder="Link Pages" value="{{ $page->link }}" name="link">

                                    @error('link')
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
                                            <option value="{{ $status }}" @if ($page->status == $status) selected @endif>
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
                                    <label for="seo_key">SEO Key</label>
                                    <input type="text" class="form-control @error('seo_key') is-invalid @enderror" id="seo_key"
                                        placeholder="SEO Key Pages, sepparated by comma (default)" value="{{ $page->seo_key }}" name="seo_key">

                                    @error('seo_key')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="media">Media</label>
                            <input type="file" class="dropify-media form-control @error('media') is-invalid @enderror dropify"
                                id="media" placeholder="Media Pages"
                                name="media">

                            @error('media')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                                <div class="d-block invalid-feedback">{{ 'jangan upload foto jika tidak ingin mengubah data sebelumnya' }}</div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="content">Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="ckeditor-backend"
                                placeholder="Content Pages" name="content" cols="30" rows="10">
                                {{ $page->content }}
                            </textarea>

                            @error('content')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label for="seo_desc">SEO Description</label>
                            <input type="text" class="form-control @error('seo_desc') is-invalid @enderror" id="seo_desc"
                                placeholder="SEO Description Pages" value="{{ $page->seo_desc }}" name="seo_desc">

                            @error('seo_desc')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                <a href="{{route('pages.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
