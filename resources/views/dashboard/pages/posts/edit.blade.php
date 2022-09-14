@extends('layouts.app')
@section('title', 'Ubah Data Post')

@section('title-header', 'Ubah Data Post')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Data Post</a></li>
    <li class="breadcrumb-item active">Ubah Data Post</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Ubah Data Post</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                        placeholder="Judul Post" value="{{ $post->title }}" name="title">

                                    @error('title')
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
                                            <option value="{{ $status }}" @if ($post->status == $status) selected @endif>
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
                                    <label for="page_id">Parent</label>
                                    <select class="form-control @error('page_id') is-invalid @enderror" id="page_id" name="page_id">
                                        <option value="" selected>---Parent---</option>
                                        @foreach ($pages as $page)
                                            <option value="{{ $page->id }}" @if ($post->page_id == $page->id) selected @endif>
                                                {{ str()->title($page->title) }}</option>
                                        @endforeach
                                    </select>
        
                                    @error('page_id')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="media">Media</label>
                            <input type="file" class="dropify-media form-control @error('media') is-invalid @enderror dropify"
                                id="media" placeholder="Media Post"
                                name="media">

                            @error('media')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="content">Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="ckeditor-backend"
                                placeholder="Content Post" name="content" cols="30" rows="10">
                                {{ $post->content }}
                            </textarea>

                            @error('content')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                <a href="{{route('posts.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
