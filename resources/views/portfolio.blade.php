<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - RND Properti</title>

    {{-- Link Google Fonts untuk Inter dan Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* Variabel CSS untuk Warna */
        :root {
            --primary-color: #b40000; /* Merah gelap */
            --secondary-color: gold; /* Kuning aksen */
            --dark-bg: #111; /* Latar belakang gelap */
            --light-bg: #fff; /* Latar belakang terang */
            --text-dark: #111; /* Teks gelap */
            --text-light: white; /* Teks terang */
            --border-color: #eee;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif; /* Menggunakan Inter */
            background: var(--light-bg);
            color: var(--text-dark);
            overflow-x: hidden; /* Mencegah scrollbar horizontal karena animasi */
            line-height: 1.6;
        }

        /* DEFINISI ANIMASI */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* --- HEADER & NAVIGASI (Sama seperti halaman lain) --- */
        .main-header {
            background-color: var(--light-bg);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            animation: fadeInDown 1s ease-out forwards;
        }

        .main-header .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .main-header .logo-area img {
            height: 50px;
        }

        .main-header .company-info {
            display: flex;
            flex-direction: column;
        }

        .main-header .company-name {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1;
        }

        .main-header .tagline {
            font-size: 0.9rem;
            color: #555;
            margin-top: 2px;
            font-weight: 500;
        }

        .main-header .main-nav {
            display: flex;
            gap: 25px;
        }

        .main-header .main-nav a {
            color: #555;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 5px;
            transition: color 0.3s ease;
        }

        .main-header .main-nav a:hover,
        .main-header .main-nav a.active {
            color: var(--primary-color);
        }
        /* --- AKHIR HEADER & NAVIGASI --- */

         /* --- AKHIR HEADER & NAVIGASI BARU --- */
        .hero-banner {
            width: 100%;
            height: 300px; /* Adjust height as needed */
            background-image: url('{{ asset('assets/images/salaman.png') }}'); /* Ganti sesuai path gambarmu */
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            padding-left: 10%;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
        }

        .hero-banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4); /* Dark overlay */
            z-index: -1;
        }

        .hero-banner .breadcrumbs {
            font-size: 0.9em;
            margin-bottom: 10px;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .hero-banner .breadcrumbs a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .hero-banner .breadcrumbs a:hover {
            text-decoration: underline;
        }

        .hero-banner .port-title {
            font-family: 'Poppins', sans-serif;
            font-size: 3em;
            font-weight: 700;
            margin: 0;
            animation: fadeInUp 1s ease-out forwards;
        }
        /* Bagian responsive untuk hero section */
        @media (max-width: 768px) {
            .portfolio-hero {
                min-height: 250px;
                padding: 0 20px;
            }
            .portfolio-hero .hero-content h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 480px) {
            .portfolio-hero {
                min-height: 200px;
                padding: 0 15px;
            }
            .portfolio-hero .hero-content h1 {
                font-size: 2.2rem;
            }
            .portfolio-hero .hero-content .breadcrumb {
                font-size: 0.85rem;
            }
        }
        /* --- AKHIR HERO SECTION PORTOFOLIO --- */

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 40px 20px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            animation: fadeInUp 1s ease-out forwards;
        }

        .page-title {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeInUp 1.2s ease-out forwards;
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: #666;
            text-align: center;
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeInUp 1.3s ease-out forwards;
        }

        /* --- GRID PORTOFOLIO --- */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Kolom responsif */
            gap: 30px; /* Jarak antar kartu */
            padding: 20px 0;
        }

        .portfolio-card {
            background-color: #f9f9f9;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0; /* Mulai tersembunyi untuk animasi */
            animation: fadeInUp 0.8s ease-out forwards;
            cursor: pointer; /* Menandakan bisa diklik */
        }

        .portfolio-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .portfolio-card img {
            width: 100%;
            height: 220px; /* Tinggi gambar tetap */
            object-fit: cover; /* Pastikan gambar mengisi area tanpa distorsi */
            display: block;
        }

        .portfolio-content {
            padding: 20px;
        }

        .portfolio-content h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-top: 0;
            margin-bottom: 10px;
        }

        .portfolio-content p {
            font-size: 0.95rem;
            color: #555;
            margin-bottom: 5px;
        }

        /* Animasi delay untuk setiap kartu */
        .portfolio-card:nth-child(1) { animation-delay: 1.4s; }
        .portfolio-card:nth-child(2) { animation-delay: 1.5s; }
        .portfolio-card:nth-child(3) { animation-delay: 1.6s; }
        .portfolio-card:nth-child(4) { animation-delay: 1.7s; }
        .portfolio-card:nth-child(5) { animation-delay: 1.8s; }
        .portfolio-card:nth-child(6) { animation-delay: 1.9s; }
        .portfolio-card:nth-child(7) { animation-delay: 2.0s; }
        .portfolio-card:nth-child(8) { animation-delay: 2.1s; }
        .portfolio-card:nth-child(9) { animation-delay: 2.2s; }
        /* Tambahkan lebih banyak jika ada lebih dari 9 proyek */

        /* --- MODAL (LIGHTBOX) STYLES --- */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Overlay gelap */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2000; /* Pastikan di atas semua elemen */
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            position: relative;
            background-color: var(--light-bg); /* Latar belakang putih untuk modal */
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            padding: 20px;
            display: flex;
            flex-direction: column; /* Tumpuk konten secara vertikal */
            align-items: center;
            max-width: 90%; /* Lebar maksimum modal */
            max-height: 95%; /* Meningkatkan tinggi maksimum modal agar lebih banyak ruang */
            overflow-y: auto; /* Scroll jika konten terlalu panjang */
            gap: 15px; /* Jarak antar elemen dalam modal */
        }

        .modal-info {
            text-align: center;
            color: var(--text-dark);
            margin-top: 10px; /* Memberi jarak dari elemen di atasnya */
        }

        .modal-info h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem; /* Ukuran font judul dikecilkan */
            font-weight: 700;
            color: var(--primary-color);
            margin: 0;
        }

        .modal-info p {
            font-size: 0.9rem; /* Ukuran font paragraf dikecilkan */
            color: #666;
            margin: 5px 0 0;
        }

        .modal-main-image-wrapper {
            position: relative;
            width: 100%; /* Ambil lebar penuh dari modal-content */
            max-width: 900px; /* MENINGKATKAN LEBAR MAKSIMUM UNTUK GAMBAR UTAMA */
            height: auto; /* Tinggi otomatis */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content img {
            max-width: 100%;
            max-height: 70vh; /* Mengurangi tinggi maksimum untuk memberi ruang pada thumbnail */
            object-fit: contain; /* Pastikan gambar terlihat utuh */
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .modal-close, .modal-nav-arrow {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            z-index: 2001; /* Di atas gambar */
        }

        .modal-close:hover, .modal-nav-arrow:hover {
            background-color: rgba(0, 0, 0, 0.7);
            transform: scale(1.1);
        }

        .modal-close {
            top: -15px; /* Pindahkan ke atas modal-content */
            right: -15px; /* Pindahkan ke kanan modal-content */
            background-color: var(--primary-color); /* Warna merah untuk tombol tutup */
        }
        .modal-close:hover {
            background-color: #7e0000;
        }

        .modal-nav-arrow {
            top: 50%; /* Tengah vertikal relatif terhadap wrapper gambar */
            transform: translateY(-50%);
        }

        .modal-nav-arrow.prev {
            left: 10px;
        }

        .modal-nav-arrow.next {
            right: 10px;
        }

        .modal-thumbnails {
            display: flex;
            flex-wrap: wrap; /* Memungkinkan wrap pada layar kecil */
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
            padding: 10px;
            background-color: #f0f0f0; /* Latar belakang abu-abu muda untuk thumbnail strip */
            border-radius: 8px;
            max-width: 100%; /* Pastikan tidak melebihi lebar modal */
            overflow-x: auto; /* Scroll horizontal jika terlalu banyak thumbnail */
            max-height: 100px; /* Memberikan tinggi maksimum untuk area thumbnail */
            overflow-y: auto; /* Memungkinkan scroll vertikal jika ada terlalu banyak thumbnail */
        }

        .modal-thumbnail-item {
            width: 80px; /* Ukuran thumbnail */
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: border-color 0.2s ease, transform 0.2s ease;
        }

        .modal-thumbnail-item:hover {
            transform: scale(1.05);
        }

        .modal-thumbnail-item.active {
            border-color: var(--primary-color); /* Border merah untuk thumbnail aktif */
            box-shadow: 0 0 5px rgba(180, 0, 0, 0.5);
        }

        /* FOOTER (Sama seperti halaman lain) */
        footer {
            background: var(--dark-bg);
            color: white;
            text-align: center;
            padding: 5px;
            margin-top: 60px;
            animation: fadeInUp 2.4s ease-out forwards;
            font-size: 0.9rem;
        }
        /* RESPONSIVE */
        @media (max-width: 768px) {
            .main-header {
                flex-direction: column;
                text-align: center;
                padding: 15px 20px;
            }
            .main-header .logo-area {
                flex-direction: column;
                margin-bottom: 15px;
            }
            .main-header .main-nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
            .container {
                padding: 25px 15px;
                margin: 30px auto;
            }
            .page-title {
                font-size: 2.5rem;
            }
            .page-subtitle {
                font-size: 1rem;
            }
            .portfolio-grid {
                grid-template-columns: 1fr; /* Satu kolom di mobile */
                gap: 20px;
            }
            .portfolio-card img {
                height: 180px;
            }
            .portfolio-content h3 {
                font-size: 1.3rem;
            }
            .portfolio-content p {
                font-size: 0.95rem;
            }
            .modal-content {
                padding: 15px;
            }
            .modal-info h3 {
                font-size: 1.3rem; /* Ukuran font judul dikecilkan di mobile */
            }
            .modal-info p {
                font-size: 0.8rem; /* Ukuran font paragraf dikecilkan di mobile */
            }
            .modal-content img {
                max-height: 50vh; /* Mengurangi tinggi di mobile agar tidak terlalu besar */
            }
            .modal-close {
                width: 35px;
                height: 35px;
                font-size: 1.2rem;
                top: -10px;
                right: -10px;
            }
            .modal-nav-arrow {
                width: 35px;
                height: 35px;
                font-size: 1.2rem;
            }
            .modal-nav-arrow.prev { left: 5px; }
            .modal-nav-arrow.next { right: 5px; }
            .modal-thumbnails {
                gap: 8px;
                padding: 8px;
            }
            .modal-thumbnail-item {
                width: 70px;
                height: 50px;
            }
        }

        @media (max-width: 480px) {
            .main-header .company-name {
                font-size: 1.2rem;
            }
            .main-header .tagline {
                font-size: 0.8rem;
            }
            .main-header .main-nav a {
                padding: 6px 10px;
                font-size: 0.9rem;
            }
            .page-title {
                font-size: 2rem;
            }
            .portfolio-content h3 {
                font-size: 1.1rem;
            }
            .portfolio-content p {
                font-size: 0.85rem;
            }
            .modal-info h3 {
                font-size: 1.1rem; /* Ukuran font judul dikecilkan lebih lanjut di mobile sangat kecil */
            }
            .modal-info p {
                font-size: 0.75rem; /* Ukuran font paragraf dikecilkan lebih lanjut di mobile sangat kecil */
            }
            .modal-thumbnail-item {
                width: 60px;
                height: 45px;
            }
        }
    </style>
</head>
<body>

    <header class="main-header">
        <div class="logo-area">
            <img src="{{ asset('assets/images/Logo.png') }}" alt="RND Logo">
            <div class="company-info">
                <div class="company-name">Reka Nawa Dwelling</div>
                <div class="tagline">Design and Build</div>
            </div>
        </div>
        <nav class="main-nav">
            <a href="/home">Home</a>
            <a href="/about">About</a>
            <a href="/layanan">Layanan</a>
            <a href="/portfolio" class="active">Portfolio</a>
            <a href="/property">Property</a>
            <a href="/homestay">Homestay</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

   <div class="hero-banner">
        <h1 class="port-title">Portofolio</h1>
    </div>
{{-- Akhir Hero Section Layanan --}}

    <div class="container">
        <h1 class="page-title">Our Portfolio</h1>
        <p class="page-subtitle">Ini adalah portofolio desain dan proyek konstruksi kami.</p>

        <div class="portfolio-grid">
            <div class="portfolio-card"
                 data-title="The Colonial Homestay"
                 data-location="Jl. Pacar No.9, Baciro Baru, Yogyakarta"
                 data-images='[
                     "{{ asset('assets/images/port1.png') }}",
                     "{{ asset('assets/images/port2.png') }}",
                     "{{ asset('assets/images/port3.png') }}",
                     "{{ asset('assets/images/port4.png') }}",
                     "{{ asset('assets/images/port5.png') }}"
                 ]'>
                <img src="{{ asset('assets/images/port1.png') }}" alt="The Colonial Homestay">
                <div class="portfolio-content">
                    <h3>The Colonial Homestay</h3>
                    <p><strong>Tipe:</strong> Desain & Penjualan</p>
                    <p><strong>Klien:</strong> Ibu Emil</p>
                    <p><strong>Lokasi:</strong> Jl. Pacar No.9, Baciro Baru, Yogyakarta</p>
                    <p><strong>Luas Lahan:</strong> 325m²</p>
                </div>
            </div>

            <div class="portfolio-card"
                 data-title="The Colonial Homestay (Renovasi)"
                 data-location="Jl. Pacar No.7, Baciro Baru, Gondokusuman, Yogyakarta"
                 data-images='[
                     "{{ asset('assets/images/port6.png') }}",
                     "{{ asset('assets/images/port7.png') }}",
                     "{{ asset('assets/images/port8.png') }}",
                     "{{ asset('assets/images/port9.png') }}",
                     "{{ asset('assets/images/port10.png') }}"
                 ]'>
                <img src="{{ asset('assets/images/port6.png') }}" alt="The Colonial Homestay Renovasi">
                <div class="portfolio-content">
                    <h3>The Colonial Homestay</h3>
                    <p><strong>Tipe:</strong> Desain & Renovasi</p>
                    <p><strong>Klien:</strong> Ibu Nuning</p>
                    <p><strong>Lokasi:</strong> Jl. Pacar No.7, Baciro Baru, Gondokusuman, Yogyakarta</p>
                    <p><strong>Luas Lahan:</strong> 220m²</p>
                </div>
            </div>

            <div class="portfolio-card"
                 data-title="The Heritage Homestay"
                 data-location="Jl. Tegal Gendu, Prenggan, Kotagede, Yogyakarta"
                 data-images='[
                     "{{ asset('assets/images/port11.png') }}",
                     "{{ asset('assets/images/port12.png') }}",
                     "{{ asset('assets/images/port13.png') }}",
                     "{{ asset('assets/images/port14.png') }}",
                     "{{ asset('assets/images/port15.png') }}"
                 ]'>
                <img src="{{ asset('assets/images/port11.png') }}" alt="The Heritage Homestay">
                <div class="portfolio-content">
                    <h3>The Heritage Homestay</h3>
                    <p><strong>Tipe:</strong> Desain</p>
                    <p><strong>Klien:</strong> Ibu Betty</p>
                    <p><strong>Lokasi:</strong> Jl. Tegal Gendu, Prenggan, Kotagede, Yogyakarta</p>
                    <p><strong>Luas Bangunan:</strong> 286m²</p>
                </div>
            </div>

            <div class="portfolio-card"
                 data-title="Rumah Classic Eropa"
                 data-location="Minggir, Sleman, DIY"
                 data-images='[
                     "{{ asset('assets/images/port16.png') }}",
                     "{{ asset('assets/images/port17.png') }}",
                     "{{ asset('assets/images/port18.png') }}"
                 ]'>
                <img src="{{ asset('assets/images/port18.png') }}" alt="Rumah Classic Eropa">
                <div class="portfolio-content">
                    <h3>Rumah Classic Eropa</h3>
                    <p><strong>Tipe:</strong> Desain</p>
                    <p><strong>Klien:</strong> Bapak Dani</p>
                    <p><strong>Lokasi:</strong> Minggir, Sleman, DIY</p>
                    <p><strong>Luas Bangunan:</strong> 68m²</p>
                </div>
            </div>

            <div class="portfolio-card"
                 data-title="Rumah Minimalis"
                 data-location="Tawangsari, Kocoran, Caturtunggal, Depok, Sleman"
                 data-images='[
                     "{{ asset('assets/images/port20.png') }}",
                     "{{ asset('assets/images/port21.png') }}",
                     "{{ asset('assets/images/port22.png') }}",
                     "{{ asset('assets/images/port23.png') }}"
                 ]'>
                <img src="{{ asset('assets/images/port20.png') }}" alt="Rumah Minimalis">
                <div class="portfolio-content">
                    <h3>Rumah Minimalis</h3>
                    <p><strong>Tipe:</strong> Desain & Renovasi</p>
                    <p><strong>Klien:</strong> Ibu Astuti</p>
                    <p><strong>Lokasi:</strong> Tawangsari, Kocoran, Caturtunggal, Depok, Sleman</p>
                    <p><strong>Luas Bangunan:</strong> 160m²</p>
                </div>
            </div>

            <div class="portfolio-card"
                 data-title="Masjid Peradaban Al-Kautsar"
                 data-location="Gedongan, Sinduadi, Mlati, Sleman, DIY"
                 data-images='[
                     "{{ asset('assets/images/port25.png') }}",
                     "{{ asset('assets/images/port24.png') }}",
                     "{{ asset('assets/images/port26.png') }}",
                     "{{ asset('assets/images/port23.png') }}"
                 ]'>
                <img src="{{ asset('assets/images/port25.png') }}" alt="Masjid Peradaban Al-Kautsar">
                <div class="portfolio-content">
                    <h3>Masjid Peradaban Al-Kautsar</h3>
                    <p><strong>Tipe:</strong> Desain</p>
                    <p><strong>Klien:</strong> Aqiqah Al-kautsar</p>
                    <p><strong>Lokasi:</strong> Gedongan, Sinduadi, Mlati, Sleman, DIY</p>
                    <p><strong>Luas Bangunan:</strong> 104m²</p>
                </div>
            </div>

            <div class="portfolio-card"
                 data-title="R. Keluarga & Dapur Vintage"
                 data-location="Gg. Krapyak Barepan, Margoagung, Seyegan, Sleman"
                 data-images='[
                     "{{ asset('assets/images/port28.png') }}",
                     "{{ asset('assets/images/port29.png') }}",
                     "{{ asset('assets/images/port30.png') }}",
                     "{{ asset('assets/images/port31.png') }}"
                 ]'>
                <img src="{{ asset('assets/images/port28.png') }}" alt="R. Keluarga & Dapur Vintage">
                <div class="portfolio-content">
                    <h3>R. Keluarga & Dapur Vintage</h3>
                    <p><strong>Tipe:</strong> Desain Interior</p>
                    <p><strong>Klien:</strong> Mas Yoga</p>
                    <p><strong>Lokasi:</strong> Gg. Krapyak Barepan, Margoagung, Seyegan, Sleman</p>
                    <p><strong>Luas Ruang:</strong> 19.47m²</p>
                </div>
            </div>

            <div class="portfolio-card"
                 data-title="Cafe Project"
                 data-location="Jl. Gambir Sawit, Pandeyan, Kota Yogyakarta, DIY"
                 data-images='[
                     "{{ asset('assets/images/port32.png') }}",
                     "{{ asset('assets/images/port33.png') }}",
                     "{{ asset('assets/images/port34.png') }}",
                     "{{ asset('assets/images/port35.png') }}",
                     "{{ asset('assets/images/port36.png') }}"
                 ]'>
                <img src="{{ asset('assets/images/port32.png') }}" alt="Cafe">
                <div class="portfolio-content">
                    <h3>Cafe</h3>
                    <p><strong>Tipe:</strong> Desain & Pembangunan</p>
                    <p><strong>Klien:</strong> Ibu Rinto</p>
                    <p><strong>Lokasi:</strong> Jl. Gambir Sawit, Pandeyan, Kota Yogyakarta, DIY</p>
                    <p><strong>Luas Ruang:</strong> 50m²</p>
                </div>
            </div>

            <div class="portfolio-card"
                 data-title="Rumah Studio"
                 data-location="Jl. Imogiri Tim, Giwangan, Umbulharjo, Yogyakarta, DIY"
                 data-images='[
                     "{{ asset('assets/images/port37.png') }}",
                     "{{ asset('assets/images/port38.png') }}",
                     "{{ asset('assets/images/port39.png') }}",
                     "{{ asset('assets/images/port40.png') }}",
                     "{{ asset('assets/images/port41.png') }}",
                     "{{ asset('assets/images/port42.png') }}"
                 ]'>
                <img src="{{ asset('assets/images/port37.png') }}" alt="Rumah Studio">
                <div class="portfolio-content">
                    <h3>Rumah Studio</h3>
                    <p><strong>Tipe:</strong> Desain Eksterior</p>
                    <p><strong>Klien:</strong> Mba Friska</p>
                    <p><strong>Lokasi:</strong> Jl. Imogiri Tim, Giwangan, Umbulharjo, Yogyakarta, DIY</p>
                    <p><strong>Luas Ruang:</strong> 140m²</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Reka Nawa Dwelling</p>
    </footer>

    {{-- MODAL (LIGHTBOX) --}}
    <div class="modal-overlay" id="portfolioModal">
        <div class="modal-content">
            <button class="modal-close" id="closeModal">&times;</button>
            <div class="modal-main-image-wrapper">
                <button class="modal-nav-arrow prev" id="prevImage">&lsaquo;</button>
                <img src="" alt="Full size portfolio image" id="modalImage">
                <button class="modal-nav-arrow next" id="nextImage">&rsaquo;</button>
            </div>
            <div class="modal-thumbnails" id="modalThumbnails">
            </div>
            <div class="modal-info">
                <h3 id="modalProjectTitle"></h3>
                <p id="modalProjectLocation"></p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const portfolioCards = document.querySelectorAll('.portfolio-card');
            const modalOverlay = document.getElementById('portfolioModal');
            const modalImage = document.getElementById('modalImage');
            const modalThumbnailsContainer = document.getElementById('modalThumbnails');
            const modalProjectTitle = document.getElementById('modalProjectTitle');
            const modalProjectLocation = document.getElementById('modalProjectLocation');
            const closeModalBtn = document.getElementById('closeModal');
            const prevImageBtn = document.getElementById('prevImage');
            const nextImageBtn = document.getElementById('nextImage');

            let currentImages = [];
            let currentImageIndex = 0;

            function openModal(card) {
                const title = card.dataset.title;
                const location = card.dataset.location;
                currentImages = JSON.parse(card.dataset.images);
                currentImageIndex = 0;

                modalProjectTitle.textContent = title;
                modalProjectLocation.textContent = location;
                updateModalImage();
                createThumbnails();

                modalOverlay.classList.add('active');
                document.body.style.overflow = 'hidden'; // Mencegah scroll body saat modal terbuka
            }

            function updateModalImage() {
                modalImage.src = currentImages[currentImageIndex];
                updateActiveThumbnail();
            }

            function createThumbnails() {
                modalThumbnailsContainer.innerHTML = ''; // Bersihkan thumbnail sebelumnya
                currentImages.forEach((imageUrl, index) => {
                    const thumbnail = document.createElement('img');
                    thumbnail.src = imageUrl;
                    thumbnail.alt = `Thumbnail ${index + 1}`;
                    thumbnail.classList.add('modal-thumbnail-item');
                    if (index === currentImageIndex) {
                        thumbnail.classList.add('active');
                    }
                    thumbnail.addEventListener('click', () => {
                        currentImageIndex = index;
                        updateModalImage();
                    });
                    modalThumbnailsContainer.appendChild(thumbnail);
                });
            }

            function updateActiveThumbnail() {
                document.querySelectorAll('.modal-thumbnail-item').forEach((thumb, index) => {
                    if (index === currentImageIndex) {
                        thumb.classList.add('active');
                        // Scroll thumbnail aktif ke tengah jika terlalu banyak
                        thumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                    } else {
                        thumb.classList.remove('active');
                    }
                });
            }

            function showNextImage() {
                currentImageIndex = (currentImageIndex + 1) % currentImages.length;
                updateModalImage();
            }

            function showPrevImage() {
                currentImageIndex = (currentImageIndex - 1 + currentImages.length) % currentImages.length;
                updateModalImage();
            }

            function closeModal() {
                modalOverlay.classList.remove('active');
                document.body.style.overflow = ''; // Mengembalikan scroll body
            }

            portfolioCards.forEach(card => {
                card.addEventListener('click', () => openModal(card));
            });

            closeModalBtn.addEventListener('click', closeModal);
            prevImageBtn.addEventListener('click', showPrevImage);
            nextImageBtn.addEventListener('click', showNextImage);

            // Tutup modal jika klik di luar modal-content
            modalOverlay.addEventListener('click', function(e) {
                if (e.target === modalOverlay) {
                    closeModal();
                }
            });

            // Mendukung navigasi keyboard (opsional)
            document.addEventListener('keydown', function(e) {
                if (modalOverlay.classList.contains('active')) {
                    if (e.key === 'ArrowRight') {
                        showNextImage();
                    } else if (e.key === 'ArrowLeft') {
                        showPrevImage();
                    } else if (e.key === 'Escape') {
                        closeModal();
                    }
                }
            });
        });
    </script>
</body>
</html>
