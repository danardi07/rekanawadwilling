<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - RND Properti</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* ... (CSS Anda sebelumnya) ... */

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
            background: var(--light-bg); /* Menggunakan variabel */
            color: var(--text-dark); /* Menggunakan variabel */
            overflow-x: hidden;
            animation: fadeInBody 1s ease forwards;
        }

        /* Fade-in animasi untuk body */
        @keyframes fadeInBody {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* DEFINISI ANIMASI (dari kode Anda sebelumnya) */
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

        /* --- HEADER & NAVIGASI BARU (Mengikuti Konsep Gambar) --- */
        .main-header {
            background-color: var(--light-bg); /* Latar belakang putih */
            padding: 15px 40px;
            display: flex;
            justify-content: space-between; /* Logo kiri, Navigasi kanan */
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus */
            animation: fadeInDown 1s ease-out forwards; /* Animasi untuk header */
            position: relative; /* Untuk z-index */
            z-index: 1000; /* Pastikan di atas konten lain */
        }

        .main-header .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .main-header .logo-area img {
            height: 50px; /* Ukuran logo */
        }

        .main-header .company-info {
            display: flex;
            flex-direction: column;
        }

        .main-header .company-name {
            font-family: 'Poppins', sans-serif; /* Menggunakan Poppins untuk nama perusahaan */
            font-size: 1.2rem; /* Ukuran font lebih besar untuk nama perusahaan */
            font-weight: 700;
            color: var(--primary-color); /* Warna merah untuk nama perusahaan */
            line-height: 1; /* Hapus spasi ekstra */
        }

        .main-header .tagline {
            font-size: 0.9rem;
            color: #555;
            margin-top: 2px; /* Sesuaikan posisi vertikal */
            font-weight: 500;
        }

        .main-header .main-nav {
            display: flex;
            gap: 25px; /* Jarak antara item navigasi */
        }

        .main-header .main-nav a {
            color: #555; /* Warna teks link lebih gelap */
            text-decoration: none;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 5px;
            transition: color 0.3s ease; /* Hanya transisi warna teks */
        }

        .main-header .main-nav a:hover,
        .main-header .main-nav a.active {
            color: var(--primary-color); /* Warna merah saat hover/aktif */
            /* Tidak ada background color pada hover/active, hanya perubahan warna teks */
        }
        /* --- AKHIR HEADER & NAVIGASI BARU --- */

        /* HERO SECTION UNTUK CONTACT (MIRIP DENGAN PORTFOLIO) */
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

        .hero-banner .halaman {
            font-family: 'Poppins', sans-serif;
            font-size: 3em;
            font-weight: 700;
            margin: 0;
            animation: fadeInUp 1s ease-out forwards;
        }
        /* AKHIR HERO SECTION */

        /* CONTAINER */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
            animation: fadeInUp 1.2s ease forwards;
        }

        h1, h2, p {
            opacity: 0;
            animation: fadeInUp 1.5s ease forwards;
            animation-delay: 0.4s;
        }

        h1 {
            margin-bottom: 10px;
        }

        h2 {
            color: var(--primary-color); /* Menggunakan variabel */
            margin-bottom: 5px;
        }

        p.intro {
            margin-top: 0;
            margin-bottom: 30px;
        }

        /* FLEX CONTAINER FOR FORM AND MAP SIDE-BY-SIDE */
        .contact-wrapper {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            animation: fadeInUp 1.8s ease forwards;
            opacity: 0;
        }

        /* FORM */
        form {
            flex: 1 1 500px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 600px;
        }

        input, textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            resize: vertical;
            transition: border-color 0.3s;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-color); /* Menggunakan variabel */
            box-shadow: 0 0 8px rgba(180,0,0,0.5);
        }

        button {
            background-color: var(--primary-color); /* Menggunakan variabel */
            color: white;
            border: none;
            padding: 12px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #7e0000;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(126,0,0,0.6);
        }

        /* MAP */
        .map-container {
            flex: 1 1 400px;
            min-width: 300px;
            height: 365px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s, transform 0.3s;
            cursor: pointer;
        }
        .map-container:hover {
            box-shadow: 0 8px 20px rgba(180,0,0,0.7);
            transform: scale(1.03);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* CONTACT INFO */
        .contact-info {
            margin-top: 40px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            color: #333;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 2s ease forwards;
            opacity: 0;
        }

        .contact-info h4 {
            margin-bottom: 15px;
            color: var(--primary-color); /* Menggunakan variabel */
        }

        .contact-info p {
            font-size: 16px;
            line-height: 1.5;
        }

        /* FOOTER */
        footer {
            background: var(--dark-bg); /* Menggunakan variabel */
            color: white;
            text-align: center;
            padding: 5px;
            margin-top: 60px;
            animation: fadeInUp 2.2s ease forwards;
            opacity: 0;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .main-header { /* New: Responsive for main-header */
                flex-direction: column;
                text-align: center;
                padding: 15px 20px;
            }
            .main-header .logo-area { /* New: Responsive for logo-area */
                flex-direction: column;
                margin-bottom: 15px;
            }
            .main-header .main-nav { /* New: Responsive for main-nav */
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }

            .contact-wrapper {
                flex-direction: column;
            }
            .map-container, form {
                max-width: 100%;
                height: 300px;
            }
            form {
                height: auto;
            }

            .contact-hero { /* Sesuaikan padding di mobile */
                padding: 0 20px;
            }
            .contact-hero .hero-content h1 {
                font-size: 2.5rem; /* Kecilkan ukuran font untuk mobile */
            }
        }

        @media (max-width: 480px) { /* New: More granular mobile adjustments */
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
            .container {
                padding: 20px 15px;
            }
            h1 {
                font-size: 28px;
            }
            h2 {
                font-size: 22px;
            }
            p, .contact-info p {
                font-size: 14px;
            }
            input, textarea, button {
                font-size: 14px;
                padding: 10px;
            }
            .contact-hero .hero-content h1 {
                font-size: 2rem;
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
            <a href="/portfolio">Portfolio</a>
            <a href="/property">Property</a>
            <a href="/homestay">Homestay</a>
            <a href="/contact" class="active">Contact</a>
        </nav>
    </header>

    <div class="hero-banner">
        <h1 class="halaman">Contact</h1>
    </div>

    <div class="container">
        <h2>Ada Pertanyaan Lain?</h2>
        <p class="intro">Hubungi kami jika anda memiliki pertanyaan lebih lanjut tentang Layanan Jasa kami, Harga dan lainnya. Tim kami siap melayani anda dengan senang hati.</p>

        <h1>Hubungi Kami</h1>
        <p>Silakan isi form berikut untuk menghubungi kami atau mengirimkan pertanyaan Anda.</p>

        <div class="contact-wrapper">
            <form action="/contact/send" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nama Lengkap" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="text" name="subject" placeholder="Subjek" required />
                <textarea name="message" rows="6" placeholder="Pesan Anda" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>

            <div class="map-container" title="Hover untuk zoom peta">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8350323376567!2d110.3893968!3d-7.8080157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578dfb0a4d4f%3A0x95c3c6c0fdcd8df9!2sBaciro%2C%20Kec.%20Gondokusuman%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1716890985723!5m2!1sid!2sid"
                    loading="lazy"
                    allowfullscreen=""
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Peta Lokasi Baciro, Yogyakarta"
                ></iframe>
            </div>
        </div>

        <div class="contact-info">
            <h4>Informasi Kontak</h4>
            <p><strong>Alamat:</strong> Jl. Pacar, Baciro Baru, Gondokusuman, Yogyakarta, DIY</p>
            <p><strong>Email:</strong> info@contoh.com</p>
            <p><strong>Telepon:</strong> +62 812-3456-7890</p>
        </div>
    </div>

    <footer>
        <p>© {{ date('Y') }} RND Properti - All Rights Reserved</p>
    </footer>

</body>
</html>
