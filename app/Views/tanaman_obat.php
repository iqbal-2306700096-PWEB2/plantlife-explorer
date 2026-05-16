<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanaman Obat</title>

    <!-- Bootstrap -->
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
            url('image/pegagan.jpg');

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

            <h1>Tanaman Obat</h1>

            <p>
                Koleksi tanaman herbal dan obat tradisional dari berbagai daerah
            </p>

        </div>

    </section>

    <!-- Content -->
    <div class="container">

        <h2 class="section-title">
            Daftar Tanaman Obat
        </h2>

        <div class="row">

            <?php

            $plants = [

                [
                    "name" => "Jahe",
                    "image" => "/image/jahe.jpg",
                    "desc" => "Jahe merupakan tanaman herbal yang sering digunakan sebagai minuman penghangat tubuh.",
                    "benefit" => "Membantu meredakan masuk angin, mual, dan meningkatkan daya tahan tubuh."
                ],

                [
                    "name" => "Kunyit",
                    "image" => "/image/kunyit.jpg",
                    "desc" => "Kunyit memiliki warna kuning alami dan banyak digunakan dalam pengobatan tradisional.",
                    "benefit" => "Membantu mengurangi peradangan dan menjaga kesehatan pencernaan."
                ],

                [
                    "name" => "Temulawak",
                    "image" => "/image/temulawak.jpg",
                    "desc" => "Temulawak adalah tanaman rimpang yang populer di Indonesia.",
                    "benefit" => "Membantu meningkatkan nafsu makan dan menjaga kesehatan hati."
                ],

                [
                    "name" => "Lidah Buaya",
                    "image" => "/image/lidahbuaya.jpg",
                    "desc" => "Lidah buaya terkenal dengan gel alami di dalam daunnya.",
                    "benefit" => "Membantu kesehatan kulit, rambut, dan mempercepat penyembuhan luka."
                ],

                [
                    "name" => "Daun Sirih",
                    "image" => "/image/daunsirih.jpg",
                    "desc" => "Daun sirih memiliki aroma khas dan sering digunakan sebagai antiseptik alami.",
                    "benefit" => "Membantu menjaga kesehatan mulut dan mencegah infeksi."
                ],

                [
                    "name" => "Sambiloto",
                    "image" => "/image/sambiloto1.jpg",
                    "desc" => "Sambiloto dikenal dengan rasa pahit dan khasiat herbalnya.",
                    "benefit" => "Membantu meningkatkan sistem imun tubuh."
                ],

                [
                    "name" => "Kumis Kucing",
                    "image" => "/image/kumiskucing.jpg",
                    "desc" => "Tanaman ini memiliki bunga unik menyerupai kumis kucing.",
                    "benefit" => "Membantu menjaga kesehatan ginjal dan saluran kemih."
                ],

                [
                    "name" => "Daun Mint",
                    "image" => "/image/mint.jpg",
                    "desc" => "Daun mint memberikan aroma segar alami.",
                    "benefit" => "Membantu mengatasi gangguan pencernaan dan menyegarkan napas."
                ],

                [
                    "name" => "Serai",
                    "image" => "/image/serai.jpg",
                    "desc" => "Serai sering digunakan sebagai bumbu masakan dan tanaman herbal.",
                    "benefit" => "Membantu menghangatkan tubuh dan meredakan flu."
                ],

                [
                    "name" => "Kayu Manis",
                    "image" => "/image/kayumanis.jpg",
                    "desc" => "Kayu manis memiliki aroma harum khas.",
                    "benefit" => "Membantu menjaga kadar gula darah dan kesehatan jantung."
                ],

                [
                    "name" => "Pegagan",
                    "image" => "/image/pegagan.jpg",
                    "desc" => "Pegagan merupakan tanaman herbal dengan daun kecil hijau.",
                    "benefit" => "Membantu meningkatkan daya ingat dan kesehatan otak."
                ],

                [
                    "name" => "Rosella",
                    "image" => "/image/rosella.jpg",
                    "desc" => "Rosella memiliki bunga merah yang cantik.",
                    "benefit" => "Kaya antioksidan dan membantu menjaga tekanan darah."
                ],

                [
                    "name" => "Daun Kelor",
                    "image" => "/image/daunkelor.jpg",
                    "desc" => "Daun kelor dikenal sebagai tanaman dengan nutrisi tinggi.",
                    "benefit" => "Membantu memenuhi kebutuhan vitamin dan meningkatkan energi."
                ],

                [
                    "name" => "Ginseng",
                    "image" => "/image/ginseng.jpg",
                    "desc" => "Ginseng terkenal sebagai tanaman herbal tradisional Asia.",
                    "benefit" => "Membantu meningkatkan stamina dan mengurangi kelelahan."
                ],

                [
                    "name" => "Lavender",
                    "image" => "/image/lavender.jpg",
                    "desc" => "Lavender memiliki bunga ungu dengan aroma menenangkan.",
                    "benefit" => "Membantu relaksasi dan meningkatkan kualitas tidur."
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

    <!-- Footer -->
    <footer>
        © 2026 PlantLife Explorer | Tanaman Obat
    </footer>

</body>
</html>