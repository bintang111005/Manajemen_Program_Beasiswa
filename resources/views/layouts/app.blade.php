<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Manajemen Program Beasiswa
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {

            --bg: #FFFFFF;
            --navbar: #002B2B;
            --text: #001A1A;
            --primary: #008080;
            --secondary: #2BC4C4;

        }

        /* ==================
GLOBAL
================== */

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


        /* ==================
NAVBAR
================== */

        .navbar {

            background: var(--navbar);

            padding: 20px 0;

        }

        .navbar-brand {

            color: white !important;

            font-size: 30px;

            font-weight: 800;

            letter-spacing: -1px;

        }

        .nav-link {

            color: white !important;

            margin-left: 28px;

            font-size: 15px;

            font-weight: 500;

            text-decoration: none;

            transition: .3s;

        }

        .nav-link:hover {

            opacity: .7;

        }


        /* ==================
BUTTON
================== */

        .btn-main {

            background: var(--primary);

            color: white;

            padding: 14px 36px;

            border-radius: 16px;

            text-decoration: none;

            font-weight: 600;

            display: inline-block;

            transition: .4s;

        }

        .btn-main:hover {

            background: var(--secondary);

            transform: translateY(-3px);

            color: white;

        }


        /* ==================
HERO
================== */

        .hero-section {

            position: relative;

            padding: 120px 0;

            overflow: hidden;

            animation:
                heroLoad 1.2s ease;

        }


        /* BACKGROUND */

        .mesh-left {

            position: absolute;

            left: -180px;

            top: 100px;

            width: 500px;

            height: 500px;

            background: #002B2B;

            filter: blur(170px);

            opacity: .06;

            border-radius: 50%;

        }

        .mesh-right {

            position: absolute;

            right: -120px;

            bottom: 50px;

            width: 420px;

            height: 420px;

            background: #2BC4C4;

            filter: blur(170px);

            opacity: .12;

            border-radius: 50%;

        }


        /* TEXT */

        .hero-title {

            font-size: 72px;

            font-weight: 800;

            line-height: 1.05;

            letter-spacing: -2px;

        }

        .hero-text {

            margin-top: 28px;

            font-size: 18px;

            line-height: 1.9;

            color: #647272;

        }


        /* IMAGE */

        .hero-visual {

            display: flex;

            justify-content: center;

            align-items: center;

            position: relative;

        }

        .hero-image {

            width: 100%;

            max-width: 560px;

            border-radius: 42px;

            box-shadow:
                0 30px 60px rgba(0, 43, 43, .12);

            transition: .6s;

        }

        .hero-image:hover {

            transform:
                translateY(-8px);

        }


        /* ==================
SECTION
================== */

        .section {

            padding: 110px 0;

        }


        /* ==================
CARD
================== */

        .stat-card,
        .category-card {

            background: white;

            padding: 42px;

            border-radius: 28px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, .05);

        }

        .category-card {

            transition: .4s;

        }

        .category-card:hover {

            transform:
                translateY(-8px);

        }


        /* ==================
TESTI
================== */

        .testimonial {

            padding: 80px;

            border-radius: 34px;

            background:
                linear-gradient(135deg,
                    #002B2B,
                    #004545);

            color: white;

        }


        /* ==================
SCROLL ANIMATION
================== */

        .fade-up {

            opacity: 0;

            transform:
                translateY(70px);

            transition:

                opacity 1s ease,

                transform 1s ease;

        }

        .fade-up.show {

            opacity: 1;

            transform:
                translateY(0);

        }



        /* HERO FIRST LOAD */

        @keyframes heroLoad {

            from {

                opacity: 0;

                transform:
                    translateY(30px);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0);

            }

        }


        /* ==================
RESPONSIVE
================== */

        @media(max-width:992px) {

            .hero-title {

                font-size: 48px;

                letter-spacing: -1px;

            }

            .hero-text {

                font-size: 16px;

            }

            .hero-visual {

                margin-top: 60px;

            }

            .hero-image {

                border-radius: 28px;

            }

        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <a class="navbar-brand">

                ScholarHub

            </a>

            <div>

                <a class="nav-link d-inline" href="/">
                    Home
                </a>

                <a class="nav-link d-inline" href="/program">
                    Program
                </a>

                <a class="nav-link d-inline" href="/login">
                    Login
                </a>

            </div>

        </div>

    </nav>

    @yield('content')



    <script>

        const observer =
            new IntersectionObserver(

                (entries) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add("show");

                        }

                    });

                },

                {

                    threshold: 0.18

                }

            );


        document
            .querySelectorAll(

                ".fade-up"

            )

            .forEach(

                (el) => observer.observe(el)

            );

    </script>

</body>

</html>