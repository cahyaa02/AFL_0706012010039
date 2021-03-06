<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#DB0000">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- External CSS public/assets/css/style.css --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;800;900&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="icon" href="{{ url('assets/img/favicon.ico?v=2') }}" type="image/ico" />

    {{-- Title --}}
    <title>@yield("title")</title>
</head>

<body class="bg-dark text-white">
    {{-- Header --}}
    <nav class="navbar navbar-expand-lg bg-black user-select-none">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('assets/img/logo.png') }}" alt="Logo" class="nav-logo pe-3"><strong
                    class="fw-bold">YukNonton</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $active_now_playing ?? '' }}" href="/now-playing">Now Playing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-0 {{ $active_theater ?? '' }}" href="/theater">Theater</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="mt-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="navbar bg-black fixed-bottom user-select-none">
        <div class="container">
            <div class="d-flex">
                &copy; 2021<a href="/">&nbsp;<span class="fw-bold">YukNonton</span></a>
            </div>

            <ul class="justify-content-end list-unstyled d-flex pt-2 mb-1">
                <li><a href="mailto:yuknonton@gmail.com"><i class="bi bi-envelope-fill contact"></i></a></li>
                <li class="ms-3"><a href="https://twitter.com/yuknonton"><i class="bi bi-twitter contact"></i></a>
                </li>
                <li class="ms-3"><a href="instagram.com/yuknonton"><i class="bi bi-instagram contact"></i></a></li>
                <li class="ms-3"><a href="https://www.facebook.com/yuknonton"><i
                            class="bi bi-facebook contact"></i></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
