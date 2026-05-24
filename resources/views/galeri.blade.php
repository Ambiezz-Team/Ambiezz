<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Ambiezz</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .memory-board {
            background: #c79a63;
            border-radius: 24px;
            padding: 40px;
            margin-top: 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
            gap: 28px;
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.12);
        }

        .photo-card {
            background: white;
            padding: 10px 10px 22px;
            border-radius: 8px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.18);
            transition: 0.3s ease;
            position: relative;
        }

        .photo-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 4px;
            display: block;
        }

        .photo-card:hover {
            transform: scale(1.05) rotate(0deg);
            z-index: 2;
        }

        .rotate-left {
            transform: rotate(-4deg);
        }

        .rotate-right {
            transform: rotate(4deg);
        }

        .page-section h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        .page-section p {
            text-align: center;
            margin-bottom: 25px;
            color: #666;
        }

        @media (max-width: 768px) {
            .memory-board {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
                padding: 20px;
            }

            .photo-card img {
                height: 160px;
            }
        }
    </style>
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
            <p>Kumpulan kenangan yang pernah kita abadikan bersama.</p>

            <div class="memory-board">

                <div class="photo-card rotate-left">
                    <img src="{{ asset('assets/lengkap.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-right">
                    <img src="{{ asset('assets/lengkap2.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-left">
                    <img src="{{ asset('assets/bagirapot.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-right">
                    <img src="{{ asset('assets/laki.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-left">
                    <img src="{{ asset('assets/cewe.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-right">
                    <img src="{{ asset('assets/cewe2.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-left">
                    <img src="{{ asset('assets/ciater.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-right">
                    <img src="{{ asset('assets/gelap.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-left">
                    <img src="{{ asset('assets/teing.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-right">
                    <img src="{{ asset('assets/miror.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-left">
                    <img src="{{ asset('assets/cewe3.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-right">
                    <img src="{{ asset('assets/ultah.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-right">
                    <img src="{{ asset('assets/gacoan.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-right">
                    <img src="{{ asset('assets/helm.jpg') }}" alt="">
                </div>

                <div class="photo-card rotate-right">
                    <img src="{{ asset('assets/ntah.jpg') }}" alt="">
                </div>

            </div>

        </div>

    </div>

</body>

</html>