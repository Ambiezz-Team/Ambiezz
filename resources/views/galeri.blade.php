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
            <p>Pilih tema di bawah lalu unggah gambar sesuai nuansa cerita Ambiezz. Setiap bagian dapat menampilkan preview gambar sebelum disimpan.</p>

            <div class="themes-grid">

                <div class="theme-card">
                    <h2>Persahabatan</h2>
                    <p>Foto kebersamaan dan momen hangat bareng teman-teman Ambiezz.</p>
                    <label class="upload-label">
                        Pilih gambar tema Persahabatan
                        <input type="file" class="theme-input" data-preview="preview-persahabatan" accept="image/*" multiple>
                    </label>
                    <div class="preview-grid" id="preview-persahabatan">
                        <p class="no-images">Belum ada gambar dipilih.</p>
                    </div>
                </div>

                <div class="theme-card">
                    <h2>Acara & Kegiatan</h2>
                    <p>Unggah foto dari acara, kunjungan, dan aktivitas kalian.</p>
                    <label class="upload-label">
                        Pilih gambar tema Acara & Kegiatan
                        <input type="file" class="theme-input" data-preview="preview-acara" accept="image/*" multiple>
                    </label>
                    <div class="preview-grid" id="preview-acara">
                        <p class="no-images">Belum ada gambar dipilih.</p>
                    </div>
                </div>

                <div class="theme-card">
                    <h2>Suasana Sekolah</h2>
                    <p>Foto yang menunjukkan suasana kelas, kantin, atau jalan bareng.</p>
                    <label class="upload-label">
                        Pilih gambar tema Suasana Sekolah
                        <input type="file" class="theme-input" data-preview="preview-sekolah" accept="image/*" multiple>
                    </label>
                    <div class="preview-grid" id="preview-sekolah">
                        <p class="no-images">Belum ada gambar dipilih.</p>
                    </div>
                </div>

                <div class="theme-card">
                    <h2>Momen Spesial</h2>
                    <p>Unggah momen ulang tahun, reuni, atau perpisahan yang berkesan.</p>
                    <label class="upload-label">
                        Pilih gambar tema Momen Spesial
                        <input type="file" class="theme-input" data-preview="preview-spesial" accept="image/*" multiple>
                    </label>
                    <div class="preview-grid" id="preview-spesial">
                        <p class="no-images">Belum ada gambar dipilih.</p>
                    </div>
                </div>

            </div>

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

    <script src="{{ asset('js/gallery.js') }}"></script>

</body>

</html>