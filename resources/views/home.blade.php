<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiez Memory - Masa SMA</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Permanent+Marker&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body class="scrapbook-bg">

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
                <a href="/" class="active">HOME</a>
                <a href="/tentang">TENTANG</a>
                <a href="/anggota">ANGGOTA</a>
                <a href="/galeri">GALERI</a>
                <a href="/pesan">PESAN</a>
            </div>
        </div>

        <div class="hero">

            <div class="hero-left">
                <div class="badge-nostalgia">✨ Memori Indah Masa SMA</div>
                <h1>Keep the memories alive</h1>
                <p>
                    Setiap foto punya cerita. Setiap kenangan punya tempat untuk kembali. Mari jelajahi kembali lembar demi lembar kisah klasik kita di sekolah.
                </p>

                <div class="buttons">
                    <a href="/galeri" class="btn-dark">
                        📂 BUKA ALBUM FOTO
                    </a>
                    <a href="/anggota" class="btn-light">
                        👥 DAFTAR KELAS
                    </a>
                </div>
            </div>

            <div class="hero-right">
                <div class="scrapbook-frame">
                    <div class="tape-top"></div>
                    <div class="main-card">
                        <img src="{{ asset('assets/lengkap.jpg') }}" alt="Foto Bersama">
                        <div class="card-caption">Masa-Masa Indah✨</div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>