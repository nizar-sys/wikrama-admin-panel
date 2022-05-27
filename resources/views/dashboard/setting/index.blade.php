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
                    <form action="{{ route('sosmed.store') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h3>Social Media Links</h3>

                                <div class="form-group mb-3">
                                    <label for="fb">Facebook</label>
                                    <input type="text" class="form-control @error('fb') is-invalid @enderror" id="fb"
                                        placeholder="Facebook" value="{{ old('fb', $settings->fb) }}" name="fb">

                                    @error('fb')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="twt">Twitter</label>
                                    <input type="text" class="form-control @error('twt') is-invalid @enderror" id="twt"
                                        placeholder="Twitter" value="{{ old('twt', $settings->twt) }}" name="twt">

                                    @error('twt')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ig">Instagram</label>
                                    <input type="text" class="form-control @error('ig') is-invalid @enderror" id="ig"
                                        placeholder="Instagram" value="{{ old('ig', $settings->ig) }}" name="ig">

                                    @error('ig')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="google">Google</label>
                                    <input type="text" class="form-control @error('google') is-invalid @enderror" id="google"
                                        placeholder="Google" value="{{ old('google', $settings->google) }}" name="google">

                                    @error('google')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="linked">LinkedIn</label>
                                    <input type="text" class="form-control @error('linked') is-invalid @enderror" id="linked"
                                        placeholder="LinkedIn" value="{{ old('linked', $settings->linked) }}" name="linked">

                                    @error('linked')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="yt">YouTube</label>
                                    <input type="text" class="form-control @error('yt') is-invalid @enderror" id="yt"
                                        placeholder="YouTube" value="{{ old('yt', $settings->yt) }}" name="yt">

                                    @error('yt')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h3>Others</h3>

                                <div class="form-group mb-3">
                                    <label for="site_title">Site Title</label>
                                    <input type="text" class="form-control @error('site_title') is-invalid @enderror" id="site_title"
                                        placeholder="Site Title" value="{{ old('site_title', $settings->site_title) }}" name="site_title">

                                    @error('site_title')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="longitude_latitude">Longitude & Latitude</label>
                                    <input type="text" class="form-control @error('longitude_latitude') is-invalid @enderror" id="longitude_latitude"
                                        placeholder="Longitude & Latitude" value="{{ old('longitude_latitude', $settings->longitude_latitude) }}" name="longitude_latitude">

                                    @error('longitude_latitude')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="address">Address</label>
                                    <textarea type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                        placeholder="Address" name="address" cols="30" rows="10">
                                        {{ old('address', $settings->address) }}
                                    </textarea>

                                    @error('address')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="telp">Telephone</label>
                                    <input type="text" class="form-control @error('telp') is-invalid @enderror" id="telp"
                                        placeholder="Telephone" value="{{ old('telp', $settings->telp) }}" name="telp">

                                    @error('telp')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
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
