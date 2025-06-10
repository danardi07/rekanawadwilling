<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RND Properti</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        :root {
            --primary-color: #b40000;
            --secondary-color: gold;
            --dark-bg: #111;
            --light-bg: #fff;
            --text-dark: #111;
            --text-light: white;
            --border-color: #eee;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: var(--light-bg);
            color: var(--text-dark);
            overflow-x: hidden;
            line-height: 1.6;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

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

        /* --- Carousel Styles --- */
        .carousel-container {
            width: 100%;
            height: 500px; /* Tinggi carousel */
            position: relative;
            overflow: hidden;
            background-color: #333; /* Fallback color */
        }

        .carousel-slide {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 1;

            /* Start of new styles for zoom effect */
            transform: scale(1.1); /* Zoomed in by default */
            transition: opacity 1s ease-in-out, transform 5s ease-out; /* Smooth transition for both opacity and zoom */
            /* End of new styles */
        }

        .carousel-slide::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: -1; /* Behind content */
        }

        .carousel-slide.active {
            opacity: 1;
            z-index: 2;
            transform: scale(1); /* Zoom out to normal size when active */
        }

        .carousel-content {
            max-width: 800px;
            margin: auto;
            animation: fadeInUp 1s ease-out forwards;
        }

        .carousel-content h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 3.5em;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }

        .carousel-content p {
            font-size: 1.2em;
            line-height: 1.8;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
        }

        .carousel-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            padding: 0 20px;
            box-sizing: border-box;
            z-index: 3;
        }

        .carousel-nav button {
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 1.5em;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .carousel-nav button:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .carousel-dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 3;
        }

        .carousel-dot {
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .carousel-dot.active {
            background: var(--primary-color);
        }
        /* --- End Carousel Styles --- */


        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #111;
            animation: fadeInUp 1s ease-out forwards;
        }

        .underline {
            height: 4px;
            width: 60px;
            background-color: var(--primary-color);
            margin-bottom: 10px;
            animation: fadeInUp 1.1s ease-out forwards;
        }

        .underline.yellow {
            background-color: var(--secondary-color);
            width: 120px;
            margin-top: 5px;
            animation: fadeInUp 1.2s ease-out forwards;
        }

        .brief {
            display: flex;
            gap: 20px;
            margin-top: 30px;
            animation: fadeInUp 1.3s ease-out forwards;
        }

        .brief-icon img {
            height: 50px;
        }

        .brief-text h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .brief-text p {
            margin-bottom: 10px;
        }

        .highlight-section {
            display: flex;
            flex-wrap: wrap;
            margin-top: 40px;
            animation: fadeInUp 1.4s ease-out forwards;
        }

        .highlight-left {
            background: var(--primary-color);
            color: white;
            flex: 1;
            padding: 30px;
            min-width: 250px;
            position: relative;
        }

        .highlight-left::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            height: 6px;
            width: 80px;
            background: var(--secondary-color);
        }

        .highlight-left h2 {
            margin: 0;
        }

        .highlight-left img {
            margin-top: 50px;
            width: 250px;
        }

        .highlight-right {
            flex: 2;
            min-width: 300px;
        }

        .highlight-right img {
            width: 100%;
            height: auto;
        }

        .vision-mission-section {
            margin-top: 50px;
        }

        .vision-mission-section p {
            line-height: 1.6;
            padding-bottom: 20px;
            animation: fadeInUp 1.5s ease-out forwards;
        }

        .mission-section-with-image {
            display: flex;
            gap: 40px;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .mission-text-content {
            flex: 1;
            min-width: 450px;
        }

        .mission-illustration {
            flex: 0 0 450px;
            max-width: 100%;
            animation: fadeInUp 1.6s ease-out forwards;
            margin-top: 40px;
        }

        .mission-illustration img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .mission-list {
            list-style: none;
            padding-left: 0;
            counter-reset: mission-counter;
        }

        .mission-list li {
            display: flex;
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.6;
            animation: fadeInUp 1.7s ease-out forwards;
        }

        .mission-list li::before {
            counter-increment: mission-counter;
            content: "0" counter(mission-counter);
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
            margin-right: 15px;
        }

        .cta {
            text-align: center;
            margin-top: 60px;
            animation: fadeInUp 1.9s ease-out forwards;
        }

        .cta h2 {
            margin-bottom: 20px;
            font-size: 2.2em;
        }

        .cta a {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 12px 24px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .cta a:hover {
            background: #7e0000;
        }

        .priority-section {
            display: flex;
            flex-wrap: wrap;
            margin-top: 60px;
            animation: fadeInUp 2s ease-out forwards;
        }

        .priority-text {
            background: var(--primary-color);
            color: white;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            padding: 40px 20px;
            text-align: center;
        }

        .priority-image {
            flex: 2;
            position: relative;
            background: #c5cfd4;
            max-height: 350px;
            overflow: hidden;
        }

        .priority-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .yellow-strip {
            height: 20px;
            width: 100px;
            background: var(--secondary-color);
            position: absolute;
            top: 0;
            left: 0;
        }

        footer {
            background: var(--dark-bg);
            color: white;
            text-align: center;
            padding: 5px;
            margin-top: 60px;
            animation: fadeInUp 2.1s ease-out forwards;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .main-header {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px 20px;
            }

            .main-header .main-nav {
                margin-top: 15px;
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
            }

            .main-header .main-nav a {
                padding: 5px 10px;
            }

            .carousel-container {
                height: 400px;
            }

            .carousel-content h2 {
                font-size: 2.5em;
            }

            .carousel-content p {
                font-size: 1em;
            }

            .brief {
                flex-direction: column;
                text-align: center;
            }

            .brief-icon {
                margin: auto;
            }

            .highlight-section,
            .mission-section-with-image,
            .priority-section {
                flex-direction: column;
            }

            .highlight-left,
            .highlight-right,
            .mission-text-content,
            .mission-illustration,
            .priority-text,
            .priority-image {
                min-width: unset;
                width: 100%;
            }

            .highlight-left {
                padding: 20px;
                text-align: center;
            }

            .highlight-left img {
                margin-top: 30px;
            }

            .mission-illustration {
                margin-top: 20px;
            }

            .mission-list li {
                align-items: flex-start;
            }
        }

        @media (max-width: 576px) {
            .main-header .company-name {
                font-size: 1.3rem;
            }

            .main-header .tagline {
                font-size: 0.8rem;
            }

            .main-header .main-nav {
                gap: 10px;
            }

            .carousel-container {
                height: 300px;
            }

            .carousel-content h2 {
                font-size: 1.8em;
            }

            .carousel-content p {
                font-size: 0.9em;
            }

            .section-title {
                font-size: 28px;
            }

            .brief-text h3 {
                font-size: 18px;
            }

            .priority-text {
                font-size: 16px;
                padding: 30px 15px;
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
            <a href="/home" class="active">Home</a>
            <a href="/about">About</a>
            <a href="/layanan">Layanan</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/property">Property</a>
            <a href="/homestay">Homestay</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <div class="carousel-container">
        <div class="carousel-slide active" style="background-image: url('{{ asset('assets/images/port18.png') }}');">
            <div class="carousel-content">
                <h2>VISI KAMI</h2>
                <p>Menjadi perusahaan terdepan dalam menciptakan ruang hidup dan usaha yang inovatif, berkelanjutan, dan berdampak positif bagi masyarakat.</p>
            </div>
        </div>

        <div class="carousel-slide" style="background-image: url('{{ asset('assets/images/port39.png') }}');">
            <div class="carousel-content">
                <h2>MISI KAMI</h2>
                <p>Menyediakan layanan arsitektur, konstruksi, dan pengembangan properti yang profesional, efisien, dan berorientasi pada kualitas. Menghadirkan solusi desain dan bangunan yang fungsional, estetis, dan ramah lingkungan.</p>
            </div>
        </div>

        <div class="carousel-slide" style="background-image: url('{{ asset('assets/images/gedung.jpg') }}');">
            <div class="carousel-content">
                <h2>REKA NAWA DWELLING</h2>
                <p>Kami menghadirkan solusi terpadu dalam perencanaan, pelaksanaan, dan optimalisasi aset properti, dengan fokus pada kualitas, ketepatan waktu, dan nilai berkelanjutan.</p>
            </div>
        </div>

        <div class="carousel-nav">
            <button class="prev-slide"><i class="fas fa-chevron-left"></i></button>
            <button class="next-slide"><i class="fas fa-chevron-right"></i></button>
        </div>

        <div class="carousel-dots">
            </div>
    </div>

    <div class="container">
        <div class="section-title">About Our Company</div>
        <div class="underline"></div>
        <div class="underline yellow"></div>

        <div class="brief">
            <div class="brief-icon">
                <img src="{{ asset('assets/images/ICON.png') }}" alt="Icon">
            </div>
            <div class="brief-text">
                <h3>A Brief Story About the Company</h3>
                <p>Reka Nawa Dwelling (RND) adalah perusahaan di bidang Arsitektur, Kontraktor dan Pengembangan Properti. Kami menghadirkan solusi terpadu dalam perencanaan, pelaksanaan, dan optimalisasi aset properti, dengan fokus pada kualitas, ketepatan waktu, dan nilai berkelanjutan.</p>
                <p>Didukung oleh tim profesional yang kompeten, RND berkomitmen menjadi mitra strategis dalam mewujudkan ruang yang fungsional, estetis, dan bernilai ekonomi tinggi.</p>
            </div>
        </div>

        <div class="highlight-section">
            <div class="highlight-left">
                <h2>DESAIN CERDAS,<br>HUNIAN BERKualitas.</h2>
                <img src="{{ asset('assets/images/LoGoo.png') }}" alt="Desain Icon">
            </div>
            <div class="highlight-right">
                <img src="{{ asset('assets/images/gedung.jpg') }}" alt="Gedung">
            </div>
        </div>

        <div class="vision-mission-section">
            <div class="section-title">VISION</div>
            <div class="underline"></div>
            <div class="underline yellow"></div>
            <p>Menjadi perusahaan terdepan dalam menciptakan ruang hidup dan usaha yang inovatif, berkelanjutan dan berdampak positif bagi masyarakat.</p>

            <div class="mission-section-with-image">
                <div class="mission-text-content">
                    <div class="section-title" style="margin-top: 40px;">MISSION</div>
                    <div class="underline"></div>
                    <div class="underline yellow"></div>
                    <ol class="mission-list">
                        <li><p>Menyediakan layanan arsitektur, konstruksi, dan pengembangan properti yang profesional, efisien, dan berorientasi pada kualitas.</p></li>
                        <li><p>Menghadirkan solusi desain dan bangunan yang fungsional, estetis, dan ramah lingkungan.</p></li>
                        <li><p>Mengembangkan properti yang tidak hanya bernilai ekonomi, tetapi juga memberi manfaat sosial dan lingkungan.</p></li>
                        <li><p>Menjalin kemitraan strategis dengan klien, investor, dan komunitas lokal untuk menciptakan proyek-proyek berdampak.</p></li>
                        <li><p>Mendorong inovasi dan pertumbuhan berkelanjutan dalam setiap aspek operasional perusahaan.</p></li>
                    </ol>
                </div>
                <div class="mission-illustration">
                    <img src="{{ asset('assets/images/ilustrasi.jpg') }}" alt="Ilustrasi Konstruksi">
                </div>
            </div>
        </div>

        <div class="cta">
            <h2>Layanan Yang Kami Tawarkan</h2>
            <a href="/layanan">Layanan Kami</a>
        </div>
    </div>

    <div class="priority-section">
        <div class="priority-text">ANDA ADALAH PRIORITAS KAMI</div>
        <div class="priority-image">
            <div class="yellow-strip"></div>
            <img src="{{ asset('assets/images/llogo.png') }}" alt="Prioritas Gambar">
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Reka Nawa Dwelling</p>
    </footer>

    <script>
        const slides = document.querySelectorAll('.carousel-slide');
        const dotsContainer = document.querySelector('.carousel-dots');
        const prevButton = document.querySelector('.prev-slide');
        const nextButton = document.querySelector('.next-slide');
        let currentSlide = 0;
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
            });
            // Delay adding 'active' class slightly for a better zoom effect with the fade
            setTimeout(() => {
                slides[index].classList.add('active');
            }, 50); // Small delay
            updateDots(index);
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        function startSlideShow() {
            slideInterval = setInterval(nextSlide, 5000); // Ganti slide setiap 5 detik
        }

        function pauseSlideShow() {
            clearInterval(slideInterval);
        }

        function createDots() {
            slides.forEach((_, i) => {
                const dot = document.createElement('span');
                dot.classList.add('carousel-dot');
                dot.setAttribute('data-index', i);
                dot.addEventListener('click', () => {
                    showSlide(i);
                    pauseSlideShow();
                    startSlideShow(); // Restart timer after manual click
                });
                dotsContainer.appendChild(dot);
            });
            updateDots(0);
        }

        function updateDots(activeIndex) {
            const dots = document.querySelectorAll('.carousel-dot');
            dots.forEach((dot, i) => {
                dot.classList.remove('active');
                if (i === activeIndex) {
                    dot.classList.add('active');
                }
            });
        }

        // Event Listeners for navigation buttons
        prevButton.addEventListener('click', () => {
            prevSlide();
            pauseSlideShow();
            startSlideShow(); // Restart timer after manual click
        });

        nextButton.addEventListener('click', () => {
            nextSlide();
            pauseSlideShow();
            startSlideShow(); // Restart timer after manual click
        });

        // Initialize carousel
        document.addEventListener('DOMContentLoaded', () => {
            createDots();
            showSlide(currentSlide);
            startSlideShow();
        });
    </script>

</body>
</html>
