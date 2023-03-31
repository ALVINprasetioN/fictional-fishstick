<?php 
// koneksi ke database 
require "functions.php";
$conn = mysqli_connect("localhost","root","","perpustelkom");

// ambil data dari tokosepatu / atau data table datasepatu
$result  = mysqli_query($conn, "SELECT * FROM databuku");

if(isset($_POST["cari"])){
    $gg =  $_POST["keyword"];
    $result = mysqli_query($conn, "SELECT * FROM databuku WHERE nama LIKE '%$gg%' 
    OR nrp LIKE '%$gg%' 
    OR merek LIKE '%$gg%' 
    OR harga LIKE '%$gg%'");

}



?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>
<body> 
<div class="container">
        <nav>
            <div class="logo">perpus<b>TKLM</b></div>
            <div class="navItems">
                <form action="" method="post" >
                    <input type="text" name="keyword" size="30" autofocus
                    placeholder="masukan pencarian.." autocomplete="off" class="search-input">
                    <button type="submit" name="cari" class="search-btn">Cari!</button>
                </form>
            </div>
            <div class="links">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>            
            </div>
        </nav>

<button class="btn"><a href="tambah.php" class="col0">tambah buku</a></button>
<button class="btn"><a href="index.php" class="col0">home</a></button>
<br><br>
<div class="cols col0">
    <span class="topline">Perpustakaan</span>
    <h1><span class="multitext">FREE ONGKIR</span></h1>
</div>
<br><br>

<table border="1" cellpadding="10" cellspacing="0" class="tb">
    <thead>
        <tr >
            <td class="cols1 cols2">No.</td>
            <td class="cols1 cols2">Aksi</td>
            <td class="cols1 cols2">Gambar</td>
            <td class="cols1 cols2">Nama</td>
            <td class="cols1 cols2">NRP</td>
            <td class="cols1 cols2">harga</td>
            <td class="cols1 cols2">gmail</td>
            <td class="cols1 cols2">merek</td>
        </tr>
    </thead>
    <?php $i = 1 ;?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr class="kpr">
        <td class="nomor cols2"><?= $i; ?></td>
        <td class="cols2">
            <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"] ?>"  onclick="return confirm('yakin?')">hapus</a>
        </td>
        <td class="cols2">
            <img src="img/<?= $row["gambar"] ?>" alt="" width="200">
        </td>
        <td class="cols2"><?= $row["nama"]; ?></td>
        <td class="cols2"><?= $row["nrp"]; ?></td>
        <td class="cols2"><?= $row["harga"]; ?></td>
        <td class="cols2"><?= $row["gmail"]; ?></td>
        <td class="cols2"><?= $row["merek"]; ?></td>

    </tr>
    <?php $i++ ?>
    <?php endwhile;?>
</table>
</div><script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
    <script>
      const typed = new Typed(".multitext", {
        strings: ["FREE ONGKIR", "BY 1 GET 1", "DISCONT 70%"],
        typeSpeed: 100,
        backSpeed: 80,
        backDelay: 1500,
        loop: true,
      });
    </script>

</body>
</html>