<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UNPAM - Prodi SI')</title>

    <link rel="stylesheet" href="{{ asset('Bootstrap/bootstrap.min.css') }}">

    <style>
        body {
            background-color: #f5f7fb;
            font-family: Arial, sans-serif;
        }

        .navbar-brand { font-size: 20px; font-weight: 700; }

        .home-card {
            background: #fff;
            border-radius: 15px;
            padding: 50px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
        .home-title { font-size: 42px; font-weight: 700; }

        .profile-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
        .profile-header {
            background: #0d6efd;
            color: #fff;
            text-align: center;
            padding: 30px;
        }
        .profile-photo {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            margin-bottom: 15px;
        }
        .profile-name { font-size: 26px; font-weight: 700; }
        .profile-role {
            display: inline-block;
            background: #198754;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 13px;
            margin-top: 6px;
        }
        .profile-body { padding: 30px; }
        .profile-item { margin-bottom: 18px; }
        .profile-label { font-weight: 700; display: block; margin-bottom: 3px; }

        .gallery-title { font-size: 40px; font-weight: 700; }

        .art-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: 0.2s;
        }
        .art-card:hover { transform: translateY(-4px); }
        .art-image { width: 100%; height: 250px; object-fit: cover; }
        .art-body { padding: 22px; }
        .art-title { font-size: 22px; font-weight: 700; margin-bottom: 15px; }
        .art-info { margin-bottom: 8px; }

        .pagination { justify-content: center; margin-top: 35px; }

        .footer { background: #212529; color: #fff; padding: 18px 0; margin-top: 50px; }

        /* DETAIL GALERI */
        .detail-card { background:#fff; border-radius:15px; overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0,0.08); }
        .detail-image { width:100%; height:100%; min-height:350px; object-fit:cover; }
        .detail-body { padding:40px; }
        .detail-title { font-size:32px; font-weight:700; margin-bottom:20px; }
        .detail-item { margin-bottom:16px; }
        .detail-label {
            font-weight:700;
            display:block;
            margin-bottom:2px;
            color:#6c757d;
            font-size:13px;
            text-transform:uppercase;
            letter-spacing:.5px;
        }
        .detail-price { font-size:30px; font-weight:700; color:#0d6efd; }

        /* CONTACT - gaya perusahaan */
        .contact-hero {
            background:#0d6efd;
            color:#fff;
            padding:60px 20px;
            text-align:center;
            border-radius:15px 15px 0 0;
        }
        .contact-hero h1 { font-weight:700; }
        .contact-wrapper { background:#fff; border-radius:15px; box-shadow:0 5px 20px rgba(0,0,0,0.08); overflow:hidden; }
        .contact-info-box {
            background:#fff;
            border-radius:12px;
            padding:30px 20px;
            text-align:center;
            box-shadow:0 4px 15px rgba(0,0,0,0.08);
            height:100%;
        }
        .contact-icon {
            width:60px; height:60px;
            border-radius:50%;
            background:#0d6efd;
            color:#fff;
            display:flex; align-items:center; justify-content:center;
            font-size:22px;
            margin:0 auto 15px;
        }
        .contact-label { font-weight:700; margin-bottom:6px; }
        .social-icon {
            width:45px; height:45px;
            border-radius:50%;
            background:#0d6efd;
            color:#fff;
            display:inline-flex; align-items:center; justify-content:center;
            margin:0 5px;
            text-decoration:none;
            font-weight:700;
        }
        .social-icon:hover { background:#0b5ed7; color:#fff; }

        /* HERO SECTION - HOME */
        .hero-section {
            position: relative;
            background-image:
                linear-gradient(rgba(13, 73, 230, 0.65), rgba(10, 30, 90, 0.75)),
                url('{{ asset('assets/images/welcome.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 70px 20px 90px;
            text-align: center;
            border-radius: 0 0 30px 30px;
        }
        .hero-icon { font-size: 50px; margin-bottom: 10px; }
        .hero-eyebrow {
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 14px;
            opacity: .9;
            margin-bottom: 5px;
        }
        .hero-title {
            font-size: 48px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.4);
        }
        .hero-meta {
            font-size: 14px;
            opacity: .95;
            line-height: 1.8;
            text-shadow: 0 1px 6px rgba(0,0,0,0.4);
        }
        .home-section-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 30px;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('layouts.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Universitas Pamulang</p>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>