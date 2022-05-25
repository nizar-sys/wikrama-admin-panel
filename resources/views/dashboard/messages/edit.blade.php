@extends('layouts.app')
@section('title', 'Ubah Data Messages')

@section('title-header', 'Ubah Data Messages')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('messages.index') }}">Data Messages</a></li>
    <li class="breadcrumb-item active">Ubah Data Messages</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Ubah Data Messages</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('messages.update', $message->id) }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="Name Messages" value="{{ $message->name }}" name="name">

                                    @error('name')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="Email Messages" value="{{ $message->email }}" name="email">

                                    @error('email')
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
                                            $stats = ['spam', 'pending', 'approved'];
                                        @endphp
                                        <option value="" selected>---Status---</option>
                                        @foreach ($stats as $status)
                                            <option value="{{ $status }}" @if ($message->status == $status) selected @endif>
                                                {{ $status }}</option>
                                        @endforeach
                                    </select>
        
                                    @error('status')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="message">Mesage</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                placeholder="Mesage Messages" name="message" cols="30" rows="10">
                                {{ $message->message }}
                            </textarea>

                            @error('message')
                                <div class="d-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                <a href="{{route('messages.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
