<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sprithi Digital Mart') | Local Business. Digital Future.</title>
    <meta name="description" content="Sprithi Digital Mart connects local vendors, SHGs and customers on one quick commerce platform.">
    <link rel="icon" href="{{ asset('images/logo.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/sprithi.css') }}">
</head>
<body>
<header class="nav" id="nav">
    <div class="wrap nav-in">
        <a href="{{ route('home') }}" class="brand"><img src="{{ asset('images/logo.jpg') }}" alt="Sprithi Digital Mart"></a>
        <button class="burger" id="burger" aria-label="Menu"><i class="bi bi-list"></i></button>
        <nav class="links" id="links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'on' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'on' : '' }}">About us</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'on' : '' }}">Contact us</a>
            <a href="{{ route('contact') }}" class="btn btn-sm">Become a vendor</a>
        </nav>
    </div>
</header>

<main>@yield('content')</main>

<footer class="foot">
    <div class="wrap foot-grid">
        <div>
            <span class="chip"><img src="{{ asset('images/logo.jpg') }}" alt="Sprithi Digital Mart"></span>
            <p>Let local businesses grow. Let communities prosper. Let digital commerce reach every street, every village, every family.</p>
        </div>
        <div>
            <h4>Explore</h4>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About us</a>
            <a href="{{ route('contact') }}">Contact us</a>
        </div>
        <div>
            <h4>Reach us</h4>
            <p><i class="bi bi-telephone-fill"></i> +91 94420 25515</p>
            <p><i class="bi bi-telephone-fill"></i> +91 93451 33867</p>
            <p><i class="bi bi-globe2"></i> sprithi.com</p>
            <p><i class="bi bi-geo-alt-fill"></i> Kottaimedu, Villianur, Puducherry 605110</p>
        </div>
    </div>
    <div class="wrap copy">© {{ date('Y') }} Sprithi Digital Mart Private Limited. Shop local, grow local, earn together.</div>
</footer>
<script src="{{ asset('js/sprithi.js') }}"></script>
</body>
</html>
