<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiez Memory</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">

        <!-- NAVBAR -->

        <div class="navbar">

            <div class="logo">

                <div class="logo-box">
                    AM
                </div>

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

        <!-- HERO -->

        <div class="hero">

            <div class="hero-left">

                <h1>
                    Every Memory Has a Story
                </h1>

                <p>
                    Dulu rasanya cuma hari-hari biasa.
                    Ketawa di kelas, ngobrol ga jelas, pulang bareng,
                    dan momen kecil yang ga pernah kita pikir bakal dirindukan.
                    Sekarang semuanya jadi kenangan,
                    dan Ambiezz akan selalu jadi bagian indah dari masa itu.
                </p>

                <div class="buttons">

                    <a href="/galeri" class="btn-dark">
                        LIHAT GALERI
                    </a>

                    <a href="/anggota" class="btn-light">
                        KENALI ANGGOTA
                    </a>

                </div>

            </div>

            <div class="hero-right">

                <div class="main-card">

                    <img src="{{ asset('assets/lengkap.jpg') }}" alt="Lengkap">

                </div>

            </div>

        </div>



    </div>

</body>

</html>