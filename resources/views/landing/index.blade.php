<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrewNest Cafe</title>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container">

        <a class="navbar-brand logo" href="{{ '/' }}">
            BrewNest
        </a>

        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto gap-lg-4 text-center">

                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

            </ul>

            <div class="d-flex gap-2 mt-3 mt-lg-0">

                <a href="{{ route('login') }}" class="btn btn-outline-custom">
                    Login
                </a>

                <a href="{{ route('register') }}" class="btn btn-custom">
                    Register
                </a>

            </div>

        </div>

    </div>
</nav>

<!-- HERO -->
<section class="hero-section" id="home">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="hero-badge">
                    Premium Cafe Experience
                </span>

                <h1 class="hero-title">
                    Fresh Coffee & Handmade Meals For Your Best Moments.
                </h1>

                <p class="hero-text">
                    Nikmati kopi premium dan makanan terbaik dengan suasana cafe modern dan nyaman.
                </p>

                <div class="d-flex flex-wrap gap-3 mt-4">

                    <button class="btn btn-custom btn-lg-custom">
                        Explore Menu
                    </button>

                    <button class="btn btn-outline-custom btn-lg-custom">
                        Learn More
                    </button>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="hero-image-wrapper">

                    <img
                        src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=1200"
                        class="img-fluid hero-image"
                        alt=""
                    >

                    <div class="floating-card">

                        <small>Best Seller</small>

                        <h3>Caramel Latte</h3>

                        <strong>Rp 35.000</strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FEATURED -->
<section class="featured-section" id="menu">

    <div class="container">

        <div class="text-center section-header">

            <h2>Featured Menu</h2>

            <p>
                Menu favorit pelanggan dengan rasa premium.
            </p>

        </div>

        <div class="row g-4 mt-4">

            <div class="col-lg-4 col-md-6">

                <div class="menu-card">

                    <img
                        src="https://images.unsplash.com/photo-1511920170033-f8396924c348?q=80&w=1200"
                        class="img-fluid"
                        alt=""
                    >

                    <div class="menu-card-body">

                        <h3>Signature Coffee</h3>

                        <p>
                            Premium coffee dengan aroma terbaik.
                        </p>

                        <div class="d-flex justify-content-between align-items-center mt-4">

                            <strong>Rp 35K</strong>

                            <button class="btn btn-custom btn-sm-custom">
                                Order
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="menu-card">

                    <img
                        src="https://images.unsplash.com/photo-1517701604599-bb29b565090c?q=80&w=1200"
                        class="img-fluid"
                        alt=""
                    >

                    <div class="menu-card-body">

                        <h3>Chocolate Cake</h3>

                        <p>
                            Cake lembut premium dengan topping terbaik.
                        </p>

                        <div class="d-flex justify-content-between align-items-center mt-4">

                            <strong>Rp 28K</strong>

                            <button class="btn btn-custom btn-sm-custom">
                                Order
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="menu-card">

                    <img
                        src="https://images.unsplash.com/photo-1521017432531-fbd92d768814?q=80&w=1200"
                        class="img-fluid"
                        alt=""
                    >

                    <div class="menu-card-body">

                        <h3>Iced Latte</h3>

                        <p>
                            Fresh iced latte untuk hari terbaik Anda.
                        </p>

                        <div class="d-flex justify-content-between align-items-center mt-4">

                            <strong>Rp 32K</strong>

                            <button class="btn btn-custom btn-sm-custom">
                                Order
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- WHY US -->
<section class="why-section" id="about">

    <div class="container">

        <div class="text-center section-header text-white">

            <h2>Why Choose Us</h2>

            <p>
                Pengalaman cafe modern terbaik untuk pelanggan.
            </p>

        </div>

        <div class="row g-4 mt-4">

            <div class="col-lg-4">

                <div class="why-card">

                    <div class="icon-box">
                        ☕
                    </div>

                    <h3>Premium Coffee</h3>

                    <p>
                        Menggunakan biji kopi premium berkualitas.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="why-card">

                    <div class="icon-box">
                        🍰
                    </div>

                    <h3>Fresh Food</h3>

                    <p>
                        Semua makanan dibuat fresh setiap hari.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="why-card">

                    <div class="icon-box">
                        🪑
                    </div>

                    <h3>Cozy Place</h3>

                    <p>
                        Tempat nyaman untuk nongkrong dan bekerja.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="footer-section">

    <div class="container">

        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center gap-3">

            <div>

                <h3 class="text-white mb-2">
                    BrewNest
                </h3>

                <p class="footer-text">
                    Modern Cafe & Restaurant
                </p>

            </div>

            <div class="d-flex gap-4">

                <a href="#" class="footer-link">Instagram</a>
                <a href="#" class="footer-link">Facebook</a>
                <a href="#" class="footer-link">TikTok</a>

            </div>

        </div>

    </div>

</footer>
@include('sweetalert::alert')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>