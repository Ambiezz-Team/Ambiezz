<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">

        <div class="navbar">

            <div class="logo">
                <div class="logo-box">AM</div>

                <div class="logo-text">
                    <h3>AMBIEZZ</h3>
                    <p>MEMORY</p>
                </div>
            </div>

            <div class="nav-center">
                <a href="/">HOME</a>
                <a href="/tentang">TENTANG</a>
                <a href="/anggota">ANGGOTA</a>
                <a href="/galeri">GALERI</a>
                <a href="/pesan">PESAN</a>
            </div>

        </div>

        <div class="page-section">

            <h1>GALERI AMBIEZZ</h1>

            <div class="gallery-grid">

                <img src="{{ asset('assets/lengkap.jpg') }}" alt="">
                <img src="{{ asset('assets/lengkap2.jpg') }}" alt="">
                <img src="{{ asset('assets/bagirapot.jpg') }}" alt="">
                <img src="{{ asset('assets/laki.jpg') }}" alt="">
                <img src="{{ asset('assets/cewe.jpg') }}" alt="">
                <img src="{{ asset('assets/cewe2.jpg') }}" alt="">
                <img src="{{ asset('assets/ciater.jpg') }}" alt="">
                <img src="{{ asset('assets/gelap.jpg') }}" alt="">
                <img src="{{ asset('assets/teing.jpg') }}" alt="">
                <img src="{{ asset('assets/miror.jpg') }}" alt="">
                <img src="{{ asset('assets/cewe3.jpg') }}" alt="">
                <img src="{{ asset('assets/ultah.jpg') }}" alt="">

            </div>

        </div>

    </div>

</body>

</html>