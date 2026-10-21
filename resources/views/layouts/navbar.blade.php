<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">UNPAM - Prodi SI</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active fw-bold' : '' }}" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('digital-art.*') ? 'active fw-bold' : '' }}" href="{{ route('digital-art.index') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active fw-bold' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active fw-bold' : '' }}" href="{{ route('about') }}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>