<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Yana Travel - @yield('title', 'Agence de voyage')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            background-color: #f8f9fa;
        }

        /* ========== TOPBAR ========== */
        .topbar {
            background: #0a2b44;
            color: white;
            font-size: 0.85rem;
            padding: 8px 0;
            position: relative;
            z-index: 1100;
        }
        .topbar a {
            color: #ffb347;
            transition: all 0.3s;
            text-decoration: none;
        }
        .topbar a:hover {
            color: white;
            letter-spacing: 0.5px;
        }

        /* ========== NAVBAR ========== */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.4s;
            padding: 15px 0;
        }
        .navbar.scrolled {
            padding: 8px 0;
            background: white;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        }
        .navbar-nav .nav-link {
            font-weight: 600;
            color: #1e2f3e;
            margin: 0 12px;
            transition: all 0.3s;
            position: relative;
        }
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #ff9a3c, #ff5e00);
            transition: 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #ff7b00;
        }
        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        /* ========== HERO SECTION ========== */
        .hero {
            position: relative;
            background: linear-gradient(135deg, #0b2b44 0%, #123e60 100%);
            height: 90vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }
        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(0,0,0,0.2), rgba(0,0,0,0.6));
        }
        .hero .content {
            position: relative;
            z-index: 2;
            animation: fadeInUp 1.2s ease-out;
        }
        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            background: linear-gradient(135deg, #fff, #ffc107);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        .hero .btn-hero {
            background: linear-gradient(90deg, #ff9a3c, #ff5e00);
            color: white;
            border: none;
            padding: 14px 40px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.4s;
            box-shadow: 0 8px 20px rgba(255,94,0,0.3);
        }
        .hero .btn-hero:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 15px 30px rgba(255,94,0,0.5);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ========== CARDS ========== */
        .card-trip {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            border: none;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        .card-trip:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 40px -12px rgba(0, 0, 0, 0.25);
        }
        .card-trip img {
            height: 240px;
            object-fit: cover;
            transition: all 0.6s;
        }
        .card-trip:hover img {
            transform: scale(1.05);
        }
        .price-badge {
            background: #ff7b00;
            color: white;
            padding: 5px 14px;
            border-radius: 40px;
            font-weight: 700;
            font-size: 1.1rem;
            display: inline-block;
        }

        /* ========== SECTION TITLE ========== */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 50px;
            text-align: center;
            position: relative;
        }
        .section-title:after {
            content: '';
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ff7b00, #ffb347);
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 4px;
        }

        /* ========== STATS SECTION ========== */
        .stats-section {
            background: linear-gradient(115deg, #0b2b44, #134b6b);
            color: white;
            padding: 70px 0;
            margin-top: 70px;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: #ffb347;
        }

        /* ========== FOOTER ========== */
        .footer {
            background: #0a1c2a;
            color: #ccc;
            padding: 50px 0 20px;
        }
        .footer a {
            color: #ffb347;
            text-decoration: none;
        }
        .footer a:hover {
            color: white;
        }
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            margin: 0 6px;
            transition: all 0.3s;
        }
        .social-icons a:hover {
            background: #ff7b00;
            transform: translateY(-3px);
        }

        /* ========== ANIMATIONS ========== */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .float-icon {
            animation: float 3s ease-in-out infinite;
        }
    </style>

    @livewireStyles
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

@include('partials.topbar')
@include('partials.nav')

<main>
    @yield('content')
</main>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
    window.onscroll = function() {
        let navbar = document.querySelector('.navbar');
        if(window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };
</script>
@livewireScripts
</body>
</html>