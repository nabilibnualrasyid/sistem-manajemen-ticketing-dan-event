<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">LOGO</a>
        <div class="d-flex align-items-center gap-3">
            <a class="nav-link text-white" href="/">Beranda</a>
            <a class="nav-link text-white" href="{{ route('events') }}">Jelajahi Event</a>
            <a class="nav-link text-white" href="#">Cara Kerja</a>
            <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
            <a href="{{ route('register') }}" class="btn btn-light">Daftar</a>
        </div>
    </div>
</nav>