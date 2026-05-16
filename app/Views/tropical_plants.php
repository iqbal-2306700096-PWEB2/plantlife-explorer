<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanaman Tropis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background-color: #f4fff4;
            font-family: Arial, sans-serif;
        }

        .navbar{
            background-color: #2d6a4f;
        }

        .hero{
            height: 45vh;
            background:
            linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url('https://images.unsplash.com/photo-1466692476868-aef1dfb1e735');

            background-size: cover;
            background-position: center;

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero h1{
            font-size: 55px;
            font-weight: bold;
        }

        .section-title{
            text-align: center;
            margin-top: 50px;
            margin-bottom: 40px;
            color: #2d6a4f;
            font-weight: bold;
        }

        .plant-card{
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: 0.3s;
        }

        .plant-card:hover{
            transform: translateY(-10px);
        }

        .plant-card img{
            height: 250px;
            object-fit: cover;
        }

        footer{
            margin-top: 60px;
            background-color: #2d6a4f;
            color: white;
            text-align: center;
            padding: 20px;
        }

    </style>

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow">

        <div class="container">

            <a class="navbar-brand fw-bold" href="/">
                🌿 PlantLife Explorer
            </a>

            <a href="/" class="btn btn-light">
                Beranda
            </a>

        </div>

    </nav>

    <!-- Hero -->
    <section class="hero">

        <div>
            <h1>Tanaman Tropis Dunia</h1>

            <p>
                Koleksi berbagai tanaman tropis dari seluruh dunia
            </p>
        </div>

    </section>

    <!-- Content -->
    <div class="container">

        <h2 class="section-title">
            Daftar Tanaman Tropis
        </h2>

        <div class="row">

            <?php
            $plants = [

    [
        "name" => "Monstera",
        "image" => "/image/monstera.jpg",
        "desc" => "Monstera terkenal dengan daun berlubang unik dan sering dijadikan tanaman hias indoor."
    ],

    [
        "name" => "Palem",
        "image" => "/image/palem.jpg",
        "desc" => "Palem merupakan tanaman tropis yang memberikan suasana sejuk dan alami."
    ],

    [
        "name" => "Pisang",
        "image" => "/image/pisang.jpg",
        "desc" => "Tanaman pisang menghasilkan buah yang kaya vitamin dan tumbuh di daerah tropis."
    ],

    [
        "name" => "Anggrek",
        "image" => "/image/anggrek.jpg",
        "desc" => "Anggrek adalah bunga eksotis dengan berbagai warna dan bentuk yang indah."
    ],

    [
        "name" => "Kelapa",
        "image" => "/image/kelapa.jpg",
        "desc" => "Pohon kelapa dikenal sebagai tanaman serbaguna karena hampir semua bagiannya bermanfaat."
    ],

    [
        "name" => "Pakis",
        "image" => "/image/pakis.jpg",
        "desc" => "Pakis adalah tanaman hijau yang banyak tumbuh di hutan lembap tropis."
    ],

    [
        "name" => "Bambu",
        "image" => "/image/bambu.jpg",
        "desc" => "Bambu memiliki pertumbuhan cepat dan sering digunakan sebagai bahan bangunan."
    ],

    [
        "name" => "Kaktus Tropis",
        "image" => "/image/kaktus.jpg",
        "desc" => "Kaktus tropis mampu bertahan di lingkungan panas dengan penyimpanan air alami."
    ],

    [
        "name" => "Heliconia",
        "image" => "/image/heliconia.jpg",
        "desc" => "Heliconia memiliki bunga berwarna cerah yang banyak ditemukan di wilayah tropis."
    ],

    [
        "name" => "Anthurium",
        "image" => "/image/anthurium.jpg",
        "desc" => "Anthurium terkenal sebagai tanaman hias premium dengan daun dan bunga elegan."
    ],

    [
        "name" => "Alocasia",
        "image" => "/image/alocasia.jpg",
        "desc" => "Alocasia memiliki daun besar berbentuk unik yang cocok untuk dekorasi rumah."
    ],

    [
        "name" => "Calathea",
        "image" => "/image/calathea.jpg",
        "desc" => "Calathea dikenal dengan pola daun artistik dan sering disebut tanaman doa."
    ]

];

            foreach($plants as $plant):
            ?>

            <div class="col-md-3 mb-4">

                <div class="card plant-card shadow">
                    <img src="<?= $plant['image']; ?>" class="card-img-top">

                       <div class="card-body text-center">

                       <h5>
                      <?= $plant['name']; ?>
                      </h5>

                     <p>
                     <?= $plant['desc']; ?>
                     </p>

                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

    </div>

    <!-- Footer -->
    <footer>
        © 2026 PlantLife Explorer | Tanaman Tropis
    </footer>

</body>
</html>