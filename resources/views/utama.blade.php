<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nexora</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f1ff;
            color: #252044;
        }

        /* NAVBAR */
        nav {
            width: 100%;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #6c4dcc;
        }

        .menu {
            display: flex;
            gap: 30px;
        }

        .menu a {
            text-decoration: none;
            color: #444;
        }

        .menu a:hover {
            color: #6c4dcc;
        }

        .btn-login {
            text-decoration: none;
            background: #6c4dcc;
            color: white;
            padding: 10px 22px;
            border-radius: 20px;
        }

        /* HERO */
        .hero {
            min-height: 550px;
            padding: 80px 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero-text small {
            color: #6c4dcc;
            font-weight: bold;
        }

        .hero-text h1 {
            font-size: 55px;
            margin: 20px 0;
            line-height: 1.1;
        }

        .hero-text h1 span {
            color: #6c4dcc;
        }

        .hero-text p {
            color: #666;
            font-size: 17px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background: #6c4dcc;
            color: white;
            padding: 14px 25px;
            border-radius: 25px;
            margin-right: 10px;
        }

        .btn-outline {
            display: inline-block;
            text-decoration: none;
            color: #6c4dcc;
            border: 1px solid #6c4dcc;
            padding: 13px 25px;
            border-radius: 25px;
        }

        /* GAMBAR HERO */
        .hero-image {
            width: 400px;
            height: 350px;
            border-radius: 40px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(108, 77, 204, 0.2);
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* SECTION */
        .section {
            background: white;
            padding: 70px 8%;
            text-align: center;
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 40px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            width: 220px;
            padding: 30px 20px;
            border-radius: 20px;
            background: #f8f6ff;
        }

        .card h3 {
            margin-bottom: 10px;
            color: #6c4dcc;
        }

        .card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        /* FOOTER */
        footer {
            padding: 25px;
            text-align: center;
            background: #252044;
            color: white;
        }

        /* HP */
        @media (max-width: 800px) {
            .menu {
                display: none;
            }

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .hero-image {
                width: 100%;
                max-width: 400px;
                height: 250px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">Nexora</div>

        <div class="menu">
            <a href="/halaman">Beranda</a>
            <a href="/tentang">Tentang</a>
        </div>

        <a href="#" class="btn-login">Masuk</a>
    </nav>


    <!-- HERO -->
    <section class="hero">

        <div class="hero-text">
            <small>SELAMAT DATANG DI NEXORA</small>

            <h1>
                Wujudkan <span>Ide</span><br>
                Jadi Nyata
            </h1>

            <p>
                Nexora membantu kamu mengembangkan ide,
                membuat karya, dan menciptakan sesuatu yang
                bermanfaat dengan cara yang sederhana.
            </p>

            <a href="#" class="btn">
                Mulai Sekarang →
            </a>

            <a href="/tentang" class="btn-outline">
                Pelajari Lebih Lanjut
            </a>
        </div>
<div class="hero-image">
    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=800" alt="Workspace Nexora">
</div>

    </section>


    <!-- FITUR -->
    <section class="section">

        <h2>Kenapa Memilih Nexora?</h2>

        <div class="cards">

            <div class="card">
                <h3>🚀 Mudah</h3>
                <p>
                    Tampilan sederhana dan mudah digunakan.
                </p>
            </div>

            <div class="card">
                <h3>🔒 Aman</h3>
                <p>
                    Data dan informasi pengguna dijaga dengan baik.
                </p>
            </div>

            <div class="card">
                <h3>✨ Kreatif</h3>
                <p>
                    Membantu mewujudkan berbagai ide kreatif.
                </p>
            </div>

            <div class="card">
                <h3>💬 Dukungan</h3>
                <p>
                    Mendapatkan bantuan ketika membutuhkannya.
                </p>
            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>
        © 2026 Nexora. Semua Hak Dilindungi.
    </footer>

</body>
</html>