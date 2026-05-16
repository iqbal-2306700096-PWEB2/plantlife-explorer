<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantLife Explorer</title>
    <link rel="stylesheet" href="/css/style.css?v=2">

     <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color: #206b24;
            font-family: Arial, sans-serif;
        }

        .hero{
            height: 90vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url('image/hutantropis2.jpg');

            background-size: cover;
            background-position: center;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero h1{
            font-size: 60px;
            font-weight: bold;
        }

        .hero p{
            font-size: 20px;
        }

        .btn-explore{
            background-color: #03350e;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-explore:hover{
            background-color: #027f1d;
            color: white;
        }

        .section-title{
            text-align: center;
            margin-top: 60px;
            margin-bottom: 40px;
            font-weight: bold;
            color: #022708;
        }

        .card{
            border: none;
            border-radius: 20px;
            transition: 0.3s;
        }

        .card:hover{
            transform: translateY(-10px);
        }

        footer{
            margin-top: 80px;
            background-color: #06441d;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
        <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-dark bg-success">

    <div class="container">

        <a class="navbar-brand" href="/">🌿 PlantLife Explorer</a>

        <!-- tombol hamburger -->
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/plants">Tanaman</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Galeri</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">Tentang</a>
                </li>

            </ul>

        </div>

    </div>

</nav>

    <!-- Hero -->
    <section class="hero">
        <div>

            <h1>PlantLife Explorer</h1>

            <p>
                Jelajahi keindahan dan keanekaragaman tumbuhan dari seluruh dunia
            </p>

            <a href="/plants" class="btn-explore">
                Jelajahi Tanaman
            </a>

        </div>
    </section>

    <!-- Content -->
    <div class="container">

        <h2 class="section-title">
            Kategori Tanaman Populer
        </h2>

        <div class="row">

            <!-- Card 1 -->
             <div class="col-md-4 mb-4">

    <div class="card shadow">

        <img src="image/hutantropis3.jpg"
             class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                Tanaman Tropis
            </h5>

            <p class="card-text">
                Jelajahi tanaman tropis eksotis dengan daun dan bunga yang indah.
            </p>

            <a href="/tropical-plants" class="btn btn-success">
                Lihat Tanaman
            </a>

        </div>
    </div>
</div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">

                <div class="card shadow">

                    <img src="image/pegagan.jpg"
                         class="card-img-top">

                    <div class="card-body">

                        <h5 class="card-title">
                            Tanaman Obat
                        </h5>

                        <p class="card-text">
                            Pelajari berbagai tanaman yang digunakan dalam pengobatan tradisional maupun modern.
                        </p>    

                         <a href="/tanaman-obat" class="btn btn-success">
                             Lihat Tanaman
                         </a>

                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">

                <div class="card shadow">

                    <img src="image/raflesia.jpg"
                         class="card-img-top">

                    <div class="card-body">

                        <h5 class="card-title">
                            Tanaman Langka
                        </h5>

                        <p class="card-text">
                            Temukan spesies tumbuhan unik dan langka dari berbagai habitat alami.
                        </p>

                        <a href="/tanaman-langka" class="btn btn-success">
                             Lihat Tanaman
                         </a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>
            © 2026 PlantLife Explorer | Website Biologi Tumbuhan
        </p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>