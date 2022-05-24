@php
    $routeActive = Route::currentRouteName();
@endphp

<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'users.index' ? 'active' : '' }}" href="{{ route('users.index') }}">
        <i class="fas fa-users text-warning"></i>
        <span class="nav-link-text">{{ str()->title('users') }}</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
        <i class="fas fa-user-tie text-success"></i>
        <span class="nav-link-text">Profile</span>
    </a>
</li>

{{-- home --}}
<li class="nav-item">
    <a class="nav-link" href="#">
        <span class="nav-link-text">Home</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'informasis.index' ? 'active' : '' }}" href="{{ route('informasis.index') }}">
        <i class="text-warning"></i>
        <span class="nav-link-text">Informasi Lainnya</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'sliders.index' ? 'active' : '' }}" href="{{ route('sliders.index') }}">
        <i class="text-warning"></i>
        <span class="nav-link-text">Slider</span>
    </a>
</li>

{{-- pages --}}
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'pages.index' ? 'active' : '' }}" href="{{ route('pages.index') }}">
        <span class="nav-link-text">Pages</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'posts.index' ? 'active' : '' }}" href="{{ route('posts.index') }}">
        <i class="text-warning"></i>
        <span class="nav-link-text">Posts</span>
    </a>
</li>

{{-- albums --}}
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'albums.index' ? 'active' : '' }}" href="{{ route('albums.index') }}">
        <span class="nav-link-text">Albums</span>
    </a>
</li>