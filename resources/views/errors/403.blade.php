<!DOCTYPE html>
<html>

<head>
    <title>Halaman User Belum Login</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('error/404.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('error/404-1.png') }}">
</head>

<body class="permission_denied">
    <div id="tsparticles"></div>
    <div class="denied__wrapper">
        <h1>403</h1>
        <h3>LOST IN <span>SPACE</span> User Belum Login, Silahkan Login Terlebih dahulu !.</h3>
        <img id="astronaut" src="{{ asset('error/astronaut.svg') }}" />
        <img id="planet" src="{{ asset('error/planet.svg') }}" />
        @if (request()->is(['panel/*']))
        <a href="/panel"><button class="denied__link">Go Home</button></a>
        @else
        <a href="/panel"><button class="denied__link">Go Home</button></a>
        @endif
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/tsparticles@2.3.4/tsparticles.bundle.min.js"></script>
    <script type="text/javascript" src="js/404.js"></script>

</html>
