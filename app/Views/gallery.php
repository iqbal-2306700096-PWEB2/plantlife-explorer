<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Gallery Tanaman - PlantLife Explorer</title>

 <link rel="stylesheet" href="/css/style.css?v=2">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background: #215e21;
    font-family: Arial;
}

/* HEADER */
.header{
    text-align: center;
    padding: 60px 20px 30px;
}

.header h1{
    font-weight: bold;
    color: #a4b364;
}

/* FILTER BUTTON */
.filter-btn{
    border-radius: 30px;
    margin: 5px;
    border: 1px solid #2d6a4f;
    color: #2d6a4f;
    background: white;
    transition: 0.3s;
}

.filter-btn:hover,
.filter-btn.active{
    background: #024515;
    color: white;
}

/* GALLERY GRID */
.gallery{
    column-count: 4;
    column-gap: 15px;
    padding: 20px;
}

.gallery-item{
    break-inside: avoid;
    margin-bottom: 15px;
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    cursor: pointer;
}

.gallery-item img{
    width: 100%;
    border-radius: 15px;
    transition: 0.4s;
}

.gallery-item:hover img{
    transform: scale(1.1);
    filter: brightness(70%);
}

/* TEXT OVER IMAGE */
.overlay{
    position: absolute;
    bottom: 10px;
    left: 10px;
    color: white;
    font-weight: bold;
    font-size: 16px;
    opacity: 0;
    transition: 0.3s;
}

.gallery-item:hover .overlay{
    opacity: 1;
}

/* LIGHTBOX */
.lightbox{
    position: fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: rgba(0,0,0,0.8);
    display:none;
    justify-content:center;
    align-items:center;
}

.lightbox img{
    max-width:80%;
    max-height:80%;
    border-radius: 15px;
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
 <div class="gallery-hero">

    <h1>📸 Gallery Tanaman</h1>

    <p>
        Jelajahi keindahan dunia tumbuhan secara visual, dari tanaman obat hingga tanaman hias
        yang mempesona.
    </p>

</div>

<!-- FILTER MODERN -->
<div class="filter-container">

    <button class="filter-btn active" onclick="filter('all')">🌿 Semua</button>
    <button class="filter-btn" onclick="filter('obat')">🌱 Obat</button>
    <button class="filter-btn" onclick="filter('buah')">🍎 Buah</button>
    <button class="filter-btn" onclick="filter('hias')">🌸 Hias</button>

</div>

<!-- GALLERY -->
<div class="gallery">

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/jahe.jpg">
        <div class="overlay">Jahe</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/kunyit.jpg">
        <div class="overlay">Kunyit</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/rosella.jpg">
        <div class="overlay">Rosella</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/pisang.jpg">
        <div class="overlay">Pisang</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/daunkelor.jpg">
        <div class="overlay">Daun Kelor</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/bambu.jpg">
        <div class="overlay">Bambu</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/anggrek.jpg">
        <div class="overlay">Anggrek</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/kelapa.jpg">
        <div class="overlay">Kelapa</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/palem.jpg">
        <div class="overlay">palem</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/kaktus.jpg">
        <div class="overlay">kaktus</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/temulawak.jpg">
        <div class="overlay">Temulawak</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/kayumanis.jpg">
        <div class="overlay">Kayu Manis</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/daunsirih.jpg">
        <div class="overlay">Daun Sirih</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/kumiskucing.jpg">
        <div class="overlay">Kumis Kucing</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/lavender.jpg">
        <div class="overlay">Lavender</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/serai.jpg">
        <div class="overlay">Serai</div>
    </div>

        <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/semangka.jpg">
        <div class="overlay">Semangka</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/strowbery.jpg">
        <div class="overlay">Strowbery</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/lidahbuaya.jpg">
        <div class="overlay">Lidah Buaya</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/pegagan.jpg">
        <div class="overlay">Pegagan</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/nanas.jpg">
        <div class="overlay">Nanas</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/pir.jpg">
        <div class="overlay">Pir</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/melon.jpg">
        <div class="overlay">Melon</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/apel.jpg">
        <div class="overlay">Apel</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/mengkudu.jpg">
        <div class="overlay">Mengkudu</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/duren.jpg">
        <div class="overlay">Duren</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/manggis.jpg">
        <div class="overlay">Manggis</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/heliconia.jpg">
        <div class="overlay">Heliconia</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/alocasia.jpg">
        <div class="overlay">Alocasia</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/calathea.jpg">
        <div class="overlay">Calathea</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/tulip.jpg">
        <div class="overlay">Tulip</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/ginseng.jpg">
        <div class="overlay">Ginseng</div>
    </div>

        <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/heliconia.jpg">
        <div class="overlay">Heliconia</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/anthurium.jpg">
        <div class="overlay">Anthurium</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/rosella.jpg">
        <div class="overlay">Rosella</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/pisang.jpg">
        <div class="overlay">Pisang</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/daunkelor.jpg">
        <div class="overlay">Daun Kelor</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/bambu.jpg">
        <div class="overlay">Bambu</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/anggrek.jpg">
        <div class="overlay">Anggrek</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/kelapa.jpg">
        <div class="overlay">Kelapa</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/palem.jpg">
        <div class="overlay">palem</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/kaktus.jpg">
        <div class="overlay">kaktus</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/temulawak.jpg">
        <div class="overlay">Temulawak</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/kayumanis.jpg">
        <div class="overlay">Kayu Manis</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/daunsirih.jpg">
        <div class="overlay">Daun Sirih</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/kumiskucing.jpg">
        <div class="overlay">Kumis Kucing</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/lavender.jpg">
        <div class="overlay">Lavender</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/serai.jpg">
        <div class="overlay">Serai</div>
    </div>

        <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/semangka.jpg">
        <div class="overlay">Semangka</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/strowbery.jpg">
        <div class="overlay">Strowbery</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/lidahbuaya.jpg">
        <div class="overlay">Lidah Buaya</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/pegagan.jpg">
        <div class="overlay">Pegagan</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/nanas.jpg">
        <div class="overlay">Nanas</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/pir.jpg">
        <div class="overlay">Pir</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/melon.jpg">
        <div class="overlay">Melon</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/apel.jpg">
        <div class="overlay">Apel</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/mengkudu.jpg">
        <div class="overlay">Mengkudu</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/duren.jpg">
        <div class="overlay">Duren</div>
    </div>

    <div class="gallery-item buah" onclick="openImg(this)">
        <img src="image/manggis.jpg">
        <div class="overlay">Manggis</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/heliconia.jpg">
        <div class="overlay">Heliconia</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/alocasia.jpg">
        <div class="overlay">Alocasia</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/calathea.jpg">
        <div class="overlay">Calathea</div>
    </div>

    <div class="gallery-item hias" onclick="openImg(this)">
        <img src="image/tulip.jpg">
        <div class="overlay">Tulip</div>
    </div>

    <div class="gallery-item obat" onclick="openImg(this)">
        <img src="image/ginseng.jpg">
        <div class="overlay">Ginseng</div>
    </div>

</div>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" onclick="closeImg()">
    <img id="lightboxImg">
</div>

<script>

/* FILTER */
function filter(cat){

    let items = document.querySelectorAll(".gallery-item");

    items.forEach(item => {

        if(cat === "all"){
            item.style.display = "block";
        }else{
            item.style.display =
                item.classList.contains(cat) ? "block" : "none";
        }

    });

}

/* LIGHTBOX */
function openImg(el){
    let img = el.querySelector("img").src;
    document.getElementById("lightboxImg").src = img;
    document.getElementById("lightbox").style.display = "flex";
}

function closeImg(){
    document.getElementById("lightbox").style.display = "none";
}

</script>

</body>
</html>