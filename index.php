<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="style.css">
    <title> BUGGATI WEB</title>
</head>
<body>

    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <img src="asset/LOGO BGTI (2).png" alt="Logo">
                <span>BUGGATI</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Kalkulator</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
      <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="asset/images 1 bgt.jpg" class="d-block w-100" alt="gambar1">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white">Mobil Sport Perancis</h5>
        <p style="color: white">Pilihan Mobil spoert terbaik untukmu</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="asset/images 2 bgt.jpg" class="d-block w-100" alt="gambar2">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white">Berkendara dengan gaya</h5>
        <p style="color: white">Mobil stylish dengan kualitas yang High end</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/images 3 bgt.jpg" class="d-block w-100" alt="gambar3">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white">Saatnya Punya Mobil Impianmu</h5>
        <p style="color: white">Temukan mobil Balapmu</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<br>
  
<h2 style="text-align: center;">Tentang Kami</h2>

    <div class="card-container">
        <div class="card">
            <img src="asset/images 5 bgt.jpg" alt="Motor">

            <div class="card-body">
                <p>
                    Bugatti adalah merek mobil sport mewah asal Prancis yang didirikan pada tahun 1909 di Molsheim oleh Ettore Bugatti
                </p>
            </div>
        </div>
    </div>
</div>

<!-- KODE HTML KALKULATOR DI SINI -->
<section class="kalkulator" id="kakulator">
    <h2>Kredit Angsuran Mobil</h2>
    <form  action="proses.php"  method="POST">
        <label>Nama:</label>
        <input type="text" name="nama">
        <br><br>
        <label>Harga Mobil:</label>
        <input type="number" name="hargamobil">
        <br><br>
        <label>Tenor:</label>
        <input type="radio" name="tenor" value="1"> 1 Tahun
        <input type="radio" name="tenor" value="2"> 2 Tahun
        <input type="radio" name="tenor" value="3"> 3 Tahun
        <input type="radio" name="tenor" value="4"> 4 Tahun
        <input type="radio" name="tenor" value="5"> 5 Tahun
        <br><br>
        <label>DP:</label>
        <select name="dp">
            <option value="10">10%</option>
            <option value="20">20%</option>
            <option value="30">30%</option>
            <option value="40">40%</option>
            <option value="50">50%</option>
        </select>
        <br><br>
        <button name="submit" type="submit">Hitung</button>
        </form>
</section>

<br>
 
<h2>KALKULATOR</br>
<?php 
if (isset($_POST['submit'])){
    $hargamobil = $_POST['hargamobil'];
    $email = $_POST['email'];
    $nama = $_POST['nama']; 
    $tenor = $_POST['tenor']; 
    $dp = $_POST['dp']; 
    $hargadpmobil = 0; 
 
    if ($dp == 10) { 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 20){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 30){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 40){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 50){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 60){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } 
 
    $lamaangsuran = 0; 

    if ($tenor == 1){ 
        $lamaangsuran = $tenor * 12; 
    } elseif ($tenor == 2){ 
        $lamaangsuran = $tenor * 12; 
    } elseif ($tenor == 3){ 
        $lamaangsuran = $tenor * 12; 
    } elseif ($tenor == 4){ 
        $lamaangsuran = $tenor * 12; 
    } elseif ($tenor == 5){ 
        $lamaangsuran = $tenor * 12; 
    } 
 
    $bunga  = 20/100 * $hargamobil; 

    if ($lamaangsuran > 0){ 
        $jumlahangsuran = (($hargamobil + $bunga) - $hargadpmobil) / $lamaangsuran; 
    } 

    echo "<br>";
    echo "Nama = " . $nama . "<br>";
    echo "Email = " . $email . "<br>";
    echo "Harga mobil = " . $hargamobil . "<br>";
    echo "Tenor = " . $tenor . " Tahun<br>";
    echo "Lama angsuran = " . $lamaangsuran . " Bulan<br>";
    echo "DP = " . $dp . "%<br>";
    echo "Harga DP mobil = " . $hargadpmobil . "<br>";
    echo "Bunga = Rp" . $bunga . "<br><br>";
    echo "Angsuran = Rp" . $jumlahangsuran . "<br>";
}else{
    echo "silahkan isi datanya";
}
?>

</br>

<!-- KONTAK -->
<section class="kontak" id="kontak">
    <div class="container">
        <h2>Kontak Kami</h2>
        <p>Silakan hubungi kami jika ada pertanyaan.</p>

        <div class="kontak-container">

            <div class="kontak-info">
                <h3>Informasi Kontak</h3>
                <p><strong>Alamat:</strong> Jl. Jalan Kekota Semarang</p>
                <p><strong>Email:</strong>  support@bugatti.store</p>
                <p><strong>Telepon:</strong> +62 897-5616-080</p>
            </div>

            <form class="form-kontak">
                <input type="text" placeholder="Nama Anda" required>
                <input type="email" placeholder="Email Anda" required>
                <textarea placeholder="Pesan Anda" rows="5" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>

        </div>
    </div>
</section>


<!-- FOOTER -->
<footer>
    <div class="footer-container">

        <div class="footer-brand">
            <p>Website sederhana untuk memberikan informasi dan pelayanan terbaik.</p>
        </div>

        <div class="footer-menu">
            <h3>Menu</h3>
            <a href="#">Home</a>
            <a href="#tentang">Tentang</a>
            <a href="#kontak">Kontak</a>
        </div>

        <div class="footer-sosmed">
            <h3>Sosial Media</h3>
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
            <a href="#">WhatsApp</a>
        </div>

    </div>

    <div class="copyright">
        <p>&copy; 2026 BUGGATI. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
