<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang Nexora</title>

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

        /* ABOUT */
        .about {
            min-height: 500px;
            padding: 80px 8%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-box {
            max-width: 850px;
            background: white;
            padding: 60px;
            border-radius: 30px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(80, 60, 150, 0.1);
        }

        .about-box small {
            color: #6c4dcc;
            font-weight: bold;
        }

        .about-box h1 {
            font-size: 42px;
            margin: 20px 0;
        }

        .about-box h1 span {
            color: #6c4dcc;
        }

        .about-box p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        /* VISI MISI */
        .visi-misi {
            padding: 60px 8%;
            background: white;
            text-align: center;
        }

        .visi-misi h2 {
            font-size: 32px;
            margin-bottom: 35px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            width: 350px;
            padding: 30px;
            background: #f5f1ff;
            border-radius: 20px;
        }

        .card h3 {
            color: #6c4dcc;
            margin-bottom: 15px;
        }

        .card p {
            color: #666;
            line-height: 1.7;
        }

        /* FOOTER */
        footer {
            padding: 25px;
            text-align: center;
            background: #252044;
            color: white;
        }

        @media (max-width: 700px) {
            .menu {
                display: none;
            }

            .about-box {
                padding: 35px 25px;
            }

            .about-box h1 {
                font-size: 32px;
            }

            .card {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>

        <div class="logo">
            Nexora
        </div>

        <div class="menu">
            <a href="/halaman">Beranda</a>
            <a href="/tentang">Tentang</a>
        </div>

        <a href="#" class="btn-login">
            Masuk
        </a>

    </nav>


    <!-- TENTANG -->
    <section class="about">

        <div class="about-box">

            <small>TENTANG KAMI</small>

            <h1>
                Mengenal Lebih Dekat
                <span>Nexora</span>
            </h1>

            <p>
                Nexora adalah platform yang dibuat untuk membantu
                pengguna mengembangkan ide menjadi sesuatu yang
                nyata dan bermanfaat.
            </p>

            <p>
                Kami percaya bahwa setiap orang memiliki ide yang
                berharga. Dengan tampilan yang sederhana dan mudah
                digunakan, Nexora hadir untuk membantu mewujudkan
                ide tersebut.
            </p>

        </div>

    </section>


    <!-- VISI MISI -->
    <section class="visi-misi">

        <h2>Visi & Misi</h2>

        <div class="cards">

            <div class="card">

                <h3>🎯 Visi</h3>

                <p>
                    Menjadi platform yang membantu setiap orang
                    mengembangkan ide kreatif menjadi karya yang
                    bermanfaat.
                </p>

            </div>

            <div class="card">

                <h3>🚀 Misi</h3>

                <p>
                    Memberikan pengalaman yang sederhana,
                    nyaman, dan membantu pengguna dalam
                    mengembangkan berbagai ide.
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