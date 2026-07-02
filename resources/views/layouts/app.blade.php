<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manajemen Program Beasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --bg: #FAFCFC;
            --navbar: #FFFFFF;
            --text: #001A1A;
            --primary: #008080;
            --secondary: #2BC4C4;
            --text-soft: #667575;
            --dark-teal: #002B2B;
        }

        /* ======================
        GLOBAL
        ====================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--bg);
            color: var(--text);
            overflow-x: hidden;
        }

        /* ======================
        NAVBAR REDESIGN
        ====================== */
        .navbar {
            background: #FFFFFF !important;
            padding: 12px 24px;
            position: sticky;
            top: 20px;
            z-index: 1000;
            margin: 20px auto 0;
            border-radius: 100px;
            max-width: 1200px;
            width: 92%;
            box-shadow: 0 10px 30px rgba(0, 43, 43, 0.05);
            border: 1px solid rgba(0, 128, 128, 0.08);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            color: var(--dark-teal) !important;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .nav-link {
            color: #4A5568 !important;
            margin-left: 15px;
            padding: 8px 16px !important;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary) !important;
            opacity: 1;
        }

        .btn-admin-nav {
            background: var(--dark-teal);
            color: #FFFFFF !important;
            padding: 10px 24px;
            border-radius: 100px;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-admin-nav:hover {
            background: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 128, 128, 0.2);
            color: #FFFFFF !important;
        }

        /* ======================
        BUTTONS
        ====================== */
        .btn-main {
            background: var(--dark-teal);
            color: #FFFFFF;
            padding: 14px 34px;
            border-radius: 100px;
            font-weight: 600;
            text-decoration: none;
            border: none;
            display: inline-block;
            transition: .3s;
        }

        .btn-main:hover {
            background: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 128, 128, 0.15);
            color: #FFFFFF;
        }

        .btn-outline-main {
            border: 2px solid var(--primary);
            padding: 14px 34px;
            border-radius: 100px;
            font-weight: 600;
            text-decoration: none;
            color: var(--primary);
            transition: .3s;
        }

        .btn-outline-main:hover {
            background: var(--primary);
            color: #FFFFFF;
        }

        /* ======================
        HERO SECTION
        ====================== */
        .hero-section {
            position: relative;
            padding: 40px 0 100px;
            overflow: visible;
            background-color: #FAFCFC;
            background-image: radial-gradient(rgba(0, 128, 128, 0.08) 1.5px, transparent 1.5px);
            background-size: 24px 24px;
            animation: heroLoad 1s ease;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #EAF8F8;
            color: var(--primary);
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            border: 1px solid rgba(0, 128, 128, 0.12);
        }

        .hero-badge .status-dot {
            width: 8px;
            height: 8px;
            background: #10B981;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 8px #10B981;
        }

        .hero-title {
            font-size: 60px;
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -2px;
            color: var(--dark-teal);
        }

        .hero-text {
            margin-top: 24px;
            font-size: 18px;
            line-height: 1.8;
            color: var(--text-soft);
        }

        /* ======================
        FEATURE PILLS
        ====================== */
        .feature-pills-container {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 16px;
        }

        .feature-pill {
            background: #FFFFFF;
            border: 1px solid rgba(0, 128, 128, 0.08);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
            padding: 10px 22px;
            border-radius: 100px;
            font-size: 14px;
            font-weight: 500;
            color: var(--dark-teal);
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .feature-pill:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 128, 128, 0.08);
            border-color: rgba(0, 128, 128, 0.2);
        }

        /* ======================
        IMAGE / VISUAL
        ====================== */
        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image {
            width: 100%;
            max-width: 560px;
            height: 430px;
            object-fit: cover;
            border-radius: 30px;
            box-shadow: 0 20px 50px rgba(0, 43, 43, .10);
            transition: .5s;
        }

        .hero-image:hover {
            transform: translateY(-8px);
        }

        /* ======================
        MESH BACKGROUND
        ====================== */
        .mesh-left {
            position: absolute;
            width: 450px;
            height: 450px;
            left: -180px;
            top: 100px;
            background: #2BC4C4;
            opacity: .08;
            filter: blur(140px);
            border-radius: 50%;
            pointer-events: none;
        }

        .mesh-right {
            position: absolute;
            width: 420px;
            height: 420px;
            right: -120px;
            bottom: 50px;
            background: #008080;
            opacity: .10;
            filter: blur(140px);
            border-radius: 50%;
            pointer-events: none;
        }

        /* ======================
        FLOATING CARDS & ANIMATIONS
        ====================== */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-12px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .floating-card {
            position: absolute;
            background: #FFFFFF;
            width: 60px;
            height: 60px;
            border-radius: 16px;
            box-shadow: 0 15px 30px rgba(0, 43, 43, 0.07);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            animation: float 5s ease-in-out infinite;
            border: 1px solid rgba(0, 128, 128, 0.05);
            transition: all 0.3s ease;
        }

        .floating-card:hover {
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 43, 43, 0.12);
        }

        .floating-card svg {
            width: 30px;
            height: 30px;
        }

        .card-react {
            left: 8%;
            top: 35%;
            animation-delay: 0s;
        }

        .card-php {
            left: 15%;
            bottom: 20%;
            animation-delay: 1.5s;
        }

        .card-tailwind {
            right: 8%;
            top: 40%;
            animation-delay: 0.7s;
        }

        .card-github {
            right: 12%;
            bottom: 25%;
            animation-delay: 2.2s;
        }

        /* ======================
        SECTION
        ====================== */
        .section {
            padding: 100px 0;
        }

        /* ======================
        CARDS & CORE GRID ELEMENTS
        ====================== */
        .section-subtitle {
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.5px;
            color: var(--primary) !important;
            margin-bottom: 12px;
            display: inline-block;
        }

        .section-title {
            font-size: 38px;
            font-weight: 800;
            color: var(--dark-teal);
            letter-spacing: -0.5px;
        }

        .stat-card,
        .category-card {
            background: #FFFFFF;
            padding: 40px 36px;
            border-radius: 24px;
            border: 1px solid rgba(0, 128, 128, 0.05);
            box-shadow: 0 10px 30px rgba(0, 43, 43, 0.03);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card {
            text-align: center;
        }

        .category-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0, 43, 43, 0.08);
            border-color: rgba(0, 128, 128, 0.15);
        }

        .stat-card h2 {
            font-size: 48px;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 8px;
            letter-spacing: -1px;
        }

        .stat-card p {
            color: var(--text-soft);
            font-weight: 600;
            margin: 0;
            font-size: 16px;
        }

        /* Icon Circle Wrapper */
        .icon-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(0, 128, 128, 0.05), rgba(43, 196, 196, 0.05));
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .category-card:hover .icon-circle {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: #FFFFFF;
            transform: scale(1.05);
        }

        .icon-circle svg {
            width: 30px;
            height: 30px;
        }

        /* Step numbers decorative text */
        .step-number {
            position: absolute;
            top: 24px;
            right: 28px;
            font-size: 36px;
            font-weight: 800;
            color: rgba(0, 128, 128, 0.06);
            line-height: 1;
            transition: all 0.3s ease;
        }

        .category-card:hover .step-number {
            color: rgba(0, 128, 128, 0.15);
            transform: scale(1.1);
        }

        /* Checkmark premium list items */
        .checkmark-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .checkmark-item {
            display: flex;
            align-items: center;
            gap: 16px;
            background: #FFFFFF;
            padding: 18px 24px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 43, 43, 0.02);
            border: 1px solid rgba(0, 128, 128, 0.04);
            font-size: 16px;
            font-weight: 600;
            color: var(--dark-teal);
            transition: all 0.3s ease;
        }

        .checkmark-item:hover {
            transform: translateX(6px);
            border-color: rgba(0, 128, 128, 0.12);
            box-shadow: 0 8px 20px rgba(0, 43, 43, 0.05);
        }

        .checkmark-icon {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #EBFDF5;
            color: #10B981;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 2px 6px rgba(16, 185, 129, 0.1);
        }

        .checkmark-icon svg {
            width: 14px;
            height: 14px;
        }

        /* ======================
        TESTIMONIAL
        ====================== */
        .testimonial {
            padding: 80px;
            border-radius: 30px;
            background: linear-gradient(135deg, #002B2B, #004545);
            color: #FFFFFF;
        }

        /* ======================
        FOOTER
        ====================== */
        footer {
            padding: 50px 0;
            text-align: center;
            color: #667575;
        }

        /* ======================
        ANIMATIONS
        ====================== */
        .fade-up {
            opacity: 0;
            transform: translateY(50px);
            transition: all .9s ease;
        }

        .fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes heroLoad {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ======================
        RESPONSIVE
        ====================== */
        @media(max-width:992px) {
            .navbar {
                border-radius: 24px;
                padding: 12px 20px;
                width: 95%;
            }

            .navbar-collapse {
                margin-top: 15px;
            }

            .navbar-nav {
                align-items: flex-start !important;
                width: 100%;
            }

            .nav-link {
                color: #4A5568 !important;
                /* Ubah margin-left menjadi margin horizontal yang seimbang */
                margin: 0 10px;
                padding: 8px 16px !important;
                font-size: 15px;
                font-weight: 500;
                text-decoration: none;
                transition: all 0.3s ease;
            }

            .btn-admin-nav {
                margin-top: 10px;
                width: 100%;
                text-align: center;
            }

            .hero-title {
                font-size: 42px;
                letter-spacing: -1px;
            }

            .hero-text {
                font-size: 16px;
            }

            .hero-image {
                height: auto;
                max-width: 100%;
            }

            .hero-visual {
                margin-top: 50px;
            }

            .mesh-left,
            .mesh-right,
            .floating-card {
                display: none;
            }
        }
    </style>

</head>

<body>



    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                ScholarHub
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Menu Tengah (menggunakan mx-auto untuk mendorong ke tengah) -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login Mahasiswa</a>
                    </li>
                </ul>

                <!-- Tombol Kanan -->
                <div class="d-flex">
                    <a href="/admin-login" class="btn btn-admin-nav">Login Admin</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const observer =
            new IntersectionObserver(
                (entries) => {
                    entries.forEach(
                        (entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('show');
                            }
                        }
                    );
                },
                {
                    threshold: 0.15
                }
            );

        document
            .querySelectorAll('.fade-up')
            .forEach(
                (el) => observer.observe(el)
            );
    </script>
</body>

</html>