<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rekanawadwelling</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

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
            html, body {
            height: 100%;
            margin: 0;
            padding: 0;
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
            position: relative;
            z-index: 1000;
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

        .hero {
            background: url('{{ asset('assets/images/okok.jpg') }}') no-repeat center center/cover;
            height: 450px;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1,
        .hero p,
        .hero .btn {
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        .hero h1 {
            font-size: 48px;
            margin: 0;
            font-weight: bold;
            animation-delay: 0.6s;
        }

        .hero p:nth-of-type(1) {
            font-size: 20px;
            margin-top: 10px;
            animation-delay: 0.8s;
        }

        .hero p:nth-of-type(2) {
            font-size: 20px;
            margin-top: 10px;
            animation-delay: 1.0s;
        }

        .hero .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background: var(--dark-bg);
            color: var(--text-light);
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
            animation-delay: 1.2s;
        }

        .hero .btn:hover {
            background: #333;
        }

        .contact {
            background: var(--primary-color);
            color: white;
            padding: 50px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 30px;
            margin-top: auto;
        }

        .contact div {
            flex: 1;
            min-width: 250px;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        .contact div:first-child {
            animation-delay: 1.4s;
        }

        .contact div:last-child {
            animation-delay: 1.6s;
        }

        .contact h3 {
            margin-bottom: 15px;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 1px;
        }

        .contact p {
            margin: 5px 0;
            font-size: 15px;
        }
        footer {
            background: var(--dark-bg);
            color: white;
            text-align: center;
            padding: 5px;
            animation: fadeInUp 2.8s ease forwards;
            opacity: 0;
        }

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

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .contact {
                flex-direction: column;
                align-items: center;
            }

            .contact div {
                min-width: unset;
                width: 100%;
                text-align: center;
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

            .hero h1 {
                font-size: 30px;
            }

            .hero p {
                font-size: 16px;
            }

            .hero .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            .contact h3 {
                font-size: 18px;
            }

            .contact p {
                font-size: 14px;
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
</header>

<section class="hero">
    <div id="particles-js"></div>

    <div class="hero-content">
        <h1>COMPANY PROFILE</h1>
        <p>Selamat Datang di RND Properti</p>
        <p>Kami hadir dengan solusi arsitektur, kontraktor, dan properti yang inovatif dan berkelanjutan.</p>
        <a href="/home" class="btn">Masuk ke Halaman Utama</a>
    </div>
</section>

<section class="contact" id="contact">
    <div>
        <h3>OUR CONTACT</h3>
        <p>📞 +62 851-4765-2009 / +62 822-2324-0324</p>
        <p>✉️ officialrnd09@gmail.com</p>
        <p>📸 officialrnd09</p>
    </div>
    <div>
        <h3>RESEARCH AND DEVELOPMENT</h3>
        <p>Menciptakan solusi inovatif, berkelanjutan, dan berdampak positif melalui layanan arsitektur, kontraktor dan pengembangan properti.</p>
    </div>
</section>
<footer>
    <p>&copy; 2025 RND Properti. All rights reserved.</p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        particlesJS.load('particles-js', '{{ asset('particles.json') }}', function () {
            console.log('Particles.js loaded');
        });
    });
</script>

</body>
</html>
