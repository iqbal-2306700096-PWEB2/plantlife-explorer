<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanaman Langka</title>

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
            url('image/tulip.jpg');

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
            height: 100%;
        }

        .plant-card:hover{
            transform: translateY(-10px);
        }

        .plant-card img{
            height: 250px;
            object-fit: cover;
        }

        .benefit{
            background-color: #d8f3dc;
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
            font-size: 14px;
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

            <h1>Tanaman Langka</h1>

            <p>
                Koleksi tanaman langka dan unik dari berbagai belahan dunia
            </p>

        </div>

    </section>

    <!-- Content -->
    <div class="container">

        <h2 class="section-title">
            Daftar Tanaman Langka Dunia
        </h2>

        <div class="row">

            <?php

            $plants = [

                [
                    "name" => "Rafflesia Arnoldii",
                    "image" => "/image/raflesia.jpg",
                    "desc" => "Bunga terbesar di dunia yang tumbuh di hutan Sumatera.",
                    "benefit" => "Menjadi objek penelitian dan daya tarik wisata alam."
                ],

                [
                    "name" => "Titan Arum",
                    "image" => "/image/titanarum.jpg",
                    "desc" => "Tanaman raksasa dengan aroma kuat saat mekar.",
                    "benefit" => "Menarik penyerbuk alami seperti serangga besar."
                ],

                [
                    "name" => "Ghost Orchid",
                    "image" => "/image/ghostorchid.jpg",
                    "desc" => "Anggrek langka yang tampak seperti melayang.",
                    "benefit" => "Sangat bernilai dalam konservasi hutan tropis."
                ],

                [
                    "name" => "Jade Vine",
                    "image" => "/image/jadevine.jpg",
                    "desc" => "Bunga berwarna biru-hijau yang sangat langka.",
                    "benefit" => "Menambah keindahan ekosistem hutan hujan."
                ],

                [
                    "name" => "Middlemist Red",
                    "image" => "/image/middlemist.jpg",
                    "desc" => "Salah satu bunga paling langka di dunia.",
                    "benefit" => "Dilindungi karena populasinya sangat sedikit."
                ],

                [
                    "name" => "Silversword",
                    "image" => "/image/silversword.jpg",
                    "desc" => "Tanaman gunung dengan daun berwarna perak.",
                    "benefit" => "Tumbuh di habitat ekstrem pegunungan."
                ],

                [
                    "name" => "Welwitschia",
                    "image" => "/image/welwitschia.jpg",
                    "desc" => "Tanaman gurun yang bisa hidup ratusan tahun.",
                    "benefit" => "Adaptasi unik terhadap lingkungan ekstrem."
                ],

                [
                    "name" => "Orchid Hitam",
                    "image" => "/image/blackorchid.jpg",
                    "desc" => "Anggrek eksotis dengan warna gelap unik.",
                    "benefit" => "Sangat langka dan bernilai tinggi."
                ],

                [
                    "name" => "Youtan Poluo",
                    "image" => "/image/youtan.jpg",
                    "desc" => "Bunga kecil misterius yang sangat jarang terlihat.",
                    "benefit" => "Masih menjadi objek penelitian ilmiah."
                ],

                [
                    "name" => "Bunga Bangkai",
                    "image" => "/image/bungabangkai.jpg",
                    "desc" => "Bunga besar dengan aroma khas menyengat.",
                    "benefit" => "Menjadi ikon flora langka Indonesia."
                ]

            ];

            foreach($plants as $plant):

            ?>

            <div class="col-md-3 mb-4">

                <div class="card plant-card shadow">

                    <img src="<?= $plant['image']; ?>" class="card-img-top">

                    <div class="card-body">

                        <h5 class="text-center">
                            <?= $plant['name']; ?>
                        </h5>

                        <p>
                            <?= $plant['desc']; ?>
                        </p>

                        <div class="benefit">
                            <strong>Manfaat:</strong><br>
                            <?= $plant['benefit']; ?>
                        </div>

                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

    </div>

    <footer>
        © 2026 PlantLife Explorer | Tanaman Langka
    </footer>

</body>
</html>