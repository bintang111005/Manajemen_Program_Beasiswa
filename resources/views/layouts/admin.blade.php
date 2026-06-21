<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel - ScholarHub</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <style>
        :root {

            --sidebar: #002B2B;

            --primary: #008080;

            --secondary: #2BC4C4;

            --background: #F6F8FA;

            --white: #FFFFFF;

        }


        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

        }


        body {

            background: var(--background);

            font-family: 'Segoe UI', sans-serif;

            overflow-x: hidden;

        }


        /* =======================
SIDEBAR
======================= */

        .sidebar {

            position: fixed;

            top: 0;

            left: 0;

            width: 270px;

            height: 100vh;

            background: var(--sidebar);

            padding: 30px 20px;

            z-index: 1000;

        }


        .logo {

            font-size: 36px;

            font-weight: 800;

            color: white;

            text-decoration: none;

        }


        .logo:hover {

            color: white;

        }


        .menu {

            margin-top: 50px;

        }


        .menu a {

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 15px 18px;

            margin-bottom: 12px;

            border-radius: 14px;

            text-decoration: none;

            font-size: 17px;

            font-weight: 500;

            color: #ffffff;

            transition: .35s ease;

        }


        .menu a:hover {

            background: var(--primary);

            transform: translateX(8px);

        }


        .menu a.active {

            background: var(--primary);

            box-shadow:

                0 8px 20px rgba(0, 128, 128, .35);

        }


        /* =======================
CONTENT
======================= */

        .content {

            margin-left: 270px;

            padding: 40px;

            animation: fadeIn .6s ease;

        }


        .topbar {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 40px;

        }


        .admin-profile {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 18px;

            font-weight: 600;

        }


        .card-admin {

            background: white;

            border-radius: 24px;

            padding: 32px;

            box-shadow:

                0 8px 24px rgba(0, 0, 0, .05);

            height: 100%;

            transition: .3s ease;

        }


        .card-admin:hover {

            transform: translateY(-6px);

        }


        .stat-number {

            font-size: 42px;

            font-weight: 800;

            color: var(--primary);

        }


        .text-muted {

            font-size: 15px;

        }


        /* =======================
ANIMATION
======================= */

        @keyframes fadeIn {

            from {

                opacity: 0;

                transform: translateY(15px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }


        /* =======================
RESPONSIVE
======================= */

        @media(max-width:992px) {

            .sidebar {

                width: 100%;

                height: auto;

                position: relative;

            }


            .content {

                margin-left: 0;

            }


            .topbar {

                flex-direction: column;

                align-items: flex-start;

                gap: 15px;

            }

        }
    </style>

</head>

<body>


    <!-- SIDEBAR -->

    <div class="sidebar">


        <a href="/admin" class="logo">

            🎓 ScholarHub

        </a>


        <div class="menu">


            <a href="/admin" class="{{ request()->is('admin') ? 'active' : '' }}">

                <i class="bi bi-grid-fill"></i>

                Dashboard

            </a>


            <a href="/admin/program" class="{{ request()->is('admin/program') ? 'active' : '' }}">

                <i class="bi bi-mortarboard-fill"></i>

                Program Beasiswa

            </a>


            <a href="/admin/applicants" class="{{ request()->is('admin/applicants') ? 'active' : '' }}">

                <i class="bi bi-people-fill"></i>

                Data Pendaftar

            </a>


            <a href="/admin/verification" class="{{ request()->is('admin/verification') ? 'active' : '' }}">

                <i class="bi bi-file-earmark-check-fill"></i>

                Verifikasi Berkas

            </a>


            <a href="/admin/reports" class="{{ request()->is('admin/reports') ? 'active' : '' }}">

                <i class="bi bi-bar-chart-fill"></i>

                Laporan

            </a>


            <a href="/admin/settings" class="{{ request()->is('admin/settings') ? 'active' : '' }}">

                <i class="bi bi-gear-fill"></i>

                Pengaturan

            </a>


            <a href="/">

                <i class="bi bi-box-arrow-left"></i>

                Logout

            </a>


        </div>

    </div>


    <!-- CONTENT -->

    <div class="content">


        <div class="topbar">


            <h3>

                @yield('title')

            </h3>


            <div class="admin-profile">

                <i class="bi bi-person-circle"></i>

                Admin

            </div>


        </div>


        @yield('content')


    </div>


</body>

</html>