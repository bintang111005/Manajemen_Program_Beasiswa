<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>

        @yield('title') | ScholarHub Admin

    </title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icon -->

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    @viteReactRefresh
    @vite(['resources/js/react-app.jsx'])

    <style>
        :root {
            --bs-primary: #008080;
            --bs-primary-rgb: 0, 128, 128;
            --bs-link-color: #008080;
            --bs-link-hover-color: #002B2B;
            --bg: #FAFCFC;
            --navbar: #FFFFFF;
            --text: #001A1A;
            --primary: #008080;
            --secondary: #2BC4C4;
            --text-soft: #667575;
            --dark-teal: #002B2B;
        }

        .bg-primary {
            background-color: #008080 !important;
        }

        .text-primary {
            color: #008080 !important;
        }

        .btn-primary {
            background-color: #008080 !important;
            border-color: #008080 !important;
        }

        .btn-primary:hover {
            background-color: #002B2B !important;
            border-color: #002B2B !important;
        }
        
        .btn-outline-primary {
            color: #008080 !important;
            border-color: #008080 !important;
        }
        .btn-outline-primary:hover {
            background-color: #008080 !important;
            color: #fff !important;
        }
        *{

            margin:0;

            padding:0;

            box-sizing:border-box;

            font-family:'Inter',sans-serif;

        }

        body{

            background:#f7f8fc;

            color:#1f2937;

            overflow-x:hidden;

        }

        a{

            text-decoration:none;

        }

        /* ===========================
                    SIDEBAR
        =========================== */

        .sidebar{

            position:fixed;

            top:0;

            left:0;

            width:280px;

            height:100vh;

            background:#ffffff;

            border-right:1px solid #ececec;

            padding:30px;

            display:flex;

            flex-direction:column;

            z-index:999;

        }

        .logo{

            display:flex;

            align-items:center;

            gap:15px;

            margin-bottom:45px;

        }

        .logo-icon{

            width:55px;

            height:55px;

            border-radius:18px;

            background:linear-gradient(135deg,#008080,#2BC4C4);

            color:white;

            display:flex;

            justify-content:center;

            align-items:center;

            font-size:24px;

            box-shadow:0 12px 30px rgba(0,128,128,.25);

        }

        .logo h4{

            margin:0;

            font-weight:700;

        }

        .logo small{

            color:#9ca3af;

        }

        .menu-title{

            color:#9ca3af;

            font-size:12px;

            text-transform:uppercase;

            letter-spacing:1px;

            margin-bottom:15px;

        }

        .sidebar .nav-link{

            display:flex;

            align-items:center;

            gap:14px;

            padding:14px 18px;

            border-radius:16px;

            color:#4b5563;

            font-weight:500;

            margin-bottom:8px;

            transition:.25s;

        }

        .sidebar .nav-link:hover{

            background:#EAF8F8;

            color:#008080;

            transform:translateX(4px);

        }

        .sidebar .nav-link.active{

            background:linear-gradient(135deg,#008080,#2BC4C4);

            color:white;

            box-shadow:0 15px 35px rgba(0,128,128,.25);

        }

        .sidebar .nav-link i{

            font-size:19px;

        }

        .sidebar-footer{

            margin-top:auto;

        }

        .logout-btn{

            width:100%;

            border-radius:14px;

        }

        /* ===========================
                CONTENT
        =========================== */

        .content{

            margin-left:280px;

            min-height:100vh;

            display:flex;

            flex-direction:column;

        }

        /* ===========================
                TOPBAR
        =========================== */

        .topbar{

            background:#ffffff;

            height:82px;

            display:flex;

            justify-content:space-between;

            align-items:center;

            padding:0 35px;

            border-bottom:1px solid #ececec;

            position:sticky;

            top:0;

            z-index:99;

        }

        .topbar-left h4{

            font-weight:700;

            margin-bottom:2px;

        }

        .topbar-left small{

            color:#9ca3af;

        }

        .topbar-right{

            display:flex;

            align-items:center;

            gap:20px;

        }

        .icon-btn{

            width:46px;

            height:46px;

            border:none;

            border-radius:50%;

            background:#f4f6fb;

            transition:.25s;

        }

        .icon-btn:hover{

            background:#008080;

            color:white;

        }

        .admin-box{

            display:flex;

            align-items:center;

            gap:15px;

        }

        .admin-avatar{

            width:48px;

            height:48px;

            border-radius:50%;

            background:#008080;

            color:white;

            display:flex;

            justify-content:center;

            align-items:center;

            font-weight:bold;

            font-size:18px;

        }

        .admin-box h6{

            margin:0;

            font-weight:700;

        }

        .admin-box small{

            color:#9ca3af;

        }

        /* ===========================
                MAIN
        =========================== */

        main{

            padding:35px;

        }

        .card-custom {
            border: none;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 12px 35px rgba(0, 128, 128, 0.04);
            transition: .25s;
        }

        .card-custom:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 45px rgba(0, 128, 128, 0.12);
        }

        .table {
            border-collapse: separate !important;
            border-spacing: 0 10px !important;
            margin-bottom: 0;
        }

        .table thead th {
            border: none;
            background: #f8fafc;
            color: #64748b;
            font-size: 13px;
            text-transform: uppercase;
            padding: 16px 20px;
        }
        
        .table thead th:first-child {
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }

        .table thead th:last-child {
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .table tbody tr {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
            transition: all 0.2s ease;
            border-radius: 12px;
        }

        .table.table-hover tbody tr:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 128, 128, 0.08);
            background: #fff;
        }

        .table tbody td {
            vertical-align: middle;
            border: none;
            padding: 16px 20px;
        }

        .table tbody td:first-child {
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }

        .table tbody td:last-child {
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        /* Modern Badges */
        .badge {
            border-radius: 99px !important;
            padding: 8px 16px !important;
            font-weight: 600 !important;
            border: 1px solid transparent;
        }
        .badge.bg-primary {
            background-color: rgba(0, 128, 128, 0.1) !important;
            color: #008080 !important;
            border-color: rgba(0, 128, 128, 0.2);
        }
        .badge.bg-success {
            background-color: rgba(25, 135, 84, 0.1) !important;
            color: #198754 !important;
            border-color: rgba(25, 135, 84, 0.2);
        }
        .badge.bg-warning {
            background-color: rgba(255, 193, 7, 0.1) !important;
            color: #ffc107 !important;
            border-color: rgba(255, 193, 7, 0.2);
        }
        .badge.bg-danger {
            background-color: rgba(220, 53, 69, 0.1) !important;
            color: #dc3545 !important;
            border-color: rgba(220, 53, 69, 0.2);
        }
        /* ===========================
                RESPONSIVE
        =========================== */

        @media(max-width:992px){

            .sidebar{

                left:-280px;

                transition:.3s;

            }

            .sidebar.show{

                left:0;

            }

            .content{

                margin-left:0;

            }

            .topbar{

                padding:0 20px;

            }

            main{

                padding:20px;

            }

            .topbar-left h4{

                font-size:20px;

            }

        }

    </style>

</head>

<body>

<div class="sidebar">

    <div class="logo">

        <div class="logo-icon">

            <i class="bi bi-mortarboard-fill"></i>

        </div>

        <div>

            <h4>

                ScholarHub

            </h4>

            <small>

                Admin Panel

            </small>

        </div>

    </div>

    <div class="menu-title">

        Main Menu

    </div>

    <a href="/admin"

       class="nav-link {{ request()->is('admin') ? 'active' : '' }}">

        <i class="bi bi-grid-fill"></i>

        Dashboard

    </a>

    <a href="/admin/program"

       class="nav-link {{ request()->is('admin/program*') ? 'active' : '' }}">

        <i class="bi bi-book-half"></i>

        Program Beasiswa

    </a>

    <a href="/admin/applicants"

       class="nav-link {{ request()->is('admin/applicants*') ? 'active' : '' }}">

        <i class="bi bi-people-fill"></i>

        Data Pendaftar

    </a>

    <a href="/admin/verification"

       class="nav-link {{ request()->is('admin/verification*') ? 'active' : '' }}">

        <i class="bi bi-patch-check-fill"></i>

        Verifikasi Berkas

    </a>

    <a href="/admin/reports"

       class="nav-link {{ request()->is('admin/reports*') ? 'active' : '' }}">

        <i class="bi bi-bar-chart-fill"></i>

        Laporan

    </a>

    <a href="/admin/settings"

       class="nav-link {{ request()->is('admin/settings*') ? 'active' : '' }}">

        <i class="bi bi-gear-fill"></i>

        Pengaturan

    </a>

    <div class="sidebar-footer">

        <hr>

        <form action="/logout" method="POST">

            @csrf

            <button class="btn btn-outline-danger logout-btn">

                <i class="bi bi-box-arrow-right me-2"></i>

                Logout

            </button>

        </form>

    </div>

</div>

<div class="content">

    <div class="topbar">

        <div class="topbar-left">

            <h4>

                @yield('title')

            </h4>

            <small>

                ScholarHub Administration Dashboard

            </small>

        </div>

        <div class="topbar-right">

            <button class="icon-btn">

                <i class="bi bi-search"></i>

            </button>

            <button class="icon-btn">

                <i class="bi bi-bell"></i>

            </button>

            <div class="admin-box">

                @php
                    $adminUser = \App\Models\User::where('role', 'admin')->first() ?? (object)['name' => 'Administrator'];
                @endphp

                <div class="admin-avatar">

                    {{ strtoupper(substr($adminUser->name, 0, 1)) }}

                </div>

                <div>

                    <h6>

                        {{ $adminUser->name }}

                    </h6>

                    <small>

                        System Manager

                    </small>

                </div>

            </div>

        </div>

    </div>

    <main>

        @if(session('success'))

            <div class="alert alert-success rounded-4 border-0 shadow-sm">

                {{ session('success') }}

            </div>

        @endif

        @if(session('error'))

            <div class="alert alert-danger rounded-4 border-0 shadow-sm">

                {{ session('error') }}

            </div>

        @endif

        @yield('content')

    </main>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

document.querySelectorAll(".card-custom").forEach(card=>{

    card.addEventListener("mouseenter",()=>{

        card.style.transition=".25s";

    });

});

</script>

</body>

</html>
