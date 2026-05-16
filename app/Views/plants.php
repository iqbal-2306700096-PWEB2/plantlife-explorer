<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jelajahi Tanaman - PlantLife Explorer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: linear-gradient(to bottom, #04530a, #23df23);
            font-family: Arial;
        }

        /* HEADER */
        .header{
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
            url('https://images.unsplash.com/photo-1441974231531-c6227db76b6e');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .header h1{
            font-size: 45px;
            font-weight: bold;
        }

        /* SEARCH */
        .search-box{
            max-width: 500px;
            margin: -30px auto 40px;
        }

        /* CARD */
        .plant-card{
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: 0.3s;
            cursor: pointer;
        }

        .plant-card:hover{
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .plant-card img{
            height: 200px;
            object-fit: cover;
        }

        .tag{
            font-size: 12px;
            background: #28a745;
            color: white;
            padding: 3px 10px;
            border-radius: 20px;
        }

        /* FLOATING LEAVES */
        .leaf{
            position: absolute;
            font-size: 20px;
            animation: fall 6s linear infinite;
            opacity: 0.3;
        }

        @keyframes fall{
            0%{transform: translateY(-50px) rotate(0deg);}
            100%{transform: translateY(800px) rotate(360deg);}
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow">
        <div class="container">

            <a class="navbar-brand" href="/">
                🌿 PlantLife Explorer
            </a>

            <div>
                <a href="/" class="btn btn-light">
                    Home
                </a>
            </div>

        </div>
    </nav>
<!-- HEADER -->
<div class="header">

    <h1>🌿 Jelajahi Tanaman</h1>
    <p>Masuk ke dunia tumbuhan dan temukan keanekaragaman hayati</p>

</div>

<!-- FLOATING LEAVES -->
<div class="leaf" style="left:10%;">🍃</div>
<div class="leaf" style="left:30%; animation-delay:2s;">🌿</div>
<div class="leaf" style="left:60%; animation-delay:1s;">🍀</div>
<div class="leaf" style="left:80%; animation-delay:3s;">🌱</div>

<!-- CONTENT -->
<div class="container">

    <div class="row">

        <!-- CARD 1 -->
        <div class="col-md-4 mb-4">
            <div class="card plant-card" data-bs-toggle="modal" data-bs-target="#modal1">
                <img src="image/jahe.jpg">
                <div class="card-body">
                    <span class="tag">Obat</span>
                    <h5 class="mt-2">Jahe</h5>
                    <p>Apa sih manfaatnya?.....</p>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4 mb-4">
            <div class="card plant-card" data-bs-toggle="modal" data-bs-target="#modal2">
                <img src="image/kelapa.jpg">
                <div class="card-body">
                    <span class="tag">Tropis</span>
                    <h5 class="mt-2">Kelapa</h5>
                    <p>serba guna banget ya pohonnya!</p>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4 mb-4">
            <div class="card plant-card" data-bs-toggle="modal" data-bs-target="#modal3">
                <img src="image/anggrek.jpg">
                <div class="card-body">
                    <span class="tag">Hias</span>
                    <h5 class="mt-2">Anggrek</h5>
                    <p>Waww cantik...</p>
                </div>
            </div>
        </div>
                <div class="col-md-4 mb-4">
            <div class="card plant-card" data-bs-toggle="modal" data-bs-target="#modal1">
                <img src="image/kunyit.jpg">
                <div class="card-body">
                    <span class="tag">Obat</span>
                    <h5 class="mt-2">kunyit</h5>
                    <p>Kunyit dikenal sebagai tanaman herbal alami dengan warna kuning cerah yang memiliki banyak manfaat untuk kesehatan tubuh.</p>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4 mb-4">
            <div class="card plant-card" data-bs-toggle="modal" data-bs-target="#modal2">
                <img src="image/palem.jpg">
                <div class="card-body">
                    <span class="tag">Tropis</span>
                    <h5 class="mt-2">Palem</h5>
                    <p>Pohon serbaguna dari daerah tropis.</p>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4 mb-4">
            <div class="card plant-card" data-bs-toggle="modal" data-bs-target="#modal3">
                <img src="image/pinus.jpg">
                <div class="card-body">
                    <span class="tag">tropis</span>
                    <h5 class="mt-2">pinus</h5>
                    <p>Tanaman cantik dengan bunga eksotis.</p>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- MODAL 1 -->
<div class="modal fade" id="modal1">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Jahe</h5>
        </div>
        <div class="modal-body">
            🌱 Manfaat: Menghangatkan tubuh, mengatasi masuk angin, meningkatkan imun.
        </div>
    </div>
  </div>
</div>

<!-- MODAL 2 -->
<div class="modal fade" id="modal2">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Kelapa</h5>
        </div>
        <div class="modal-body">
            🌴 Manfaat: Air kelapa menyegarkan, daging buah kaya nutrisi.
        </div>
    </div>
  </div>
</div>

<!-- MODAL 3 -->
<div class="modal fade" id="modal3">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Anggrek</h5>
        </div>
        <div class="modal-body">
            🌸 Manfaat: Tanaman hias untuk mempercantik ruangan dan taman.
        </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>