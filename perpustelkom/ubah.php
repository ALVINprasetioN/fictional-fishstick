<?php 
// koneksi ke DBMS 
require "functions.php";

// ambil data di url
$id = $_GET['id'];

// quer data mahasiswa  berdasarkan id
$mhs = query("SELECT * FROM databuku WHERE id = $id")[0];

// koneksi ke DBMS 
edit($_POST)
    ?>

<DOCTYPE html>
<html>
<head>
    <title>tambah data sepatu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <h1 class="logo2">Edit data sepatu</h1>
    <button class="btn"><a href="index.php" class="col0"><h3>home data</h3></a></button>
    <form action="" method="post" class="tabah">
        <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
        <div class="HDR">
            <table class="HDR">
                <tr>
                    <td><label for="nama">NAMA : </label></td>
                    <td><input type="text" name="nama" id="nama" class="input1" required value="<?= $mhs['nama'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="nrp">NRP : </label></td>
                    <td><input type="text" name="nrp" id="nrp" class="input1" required value="<?= $mhs['nrp'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="harga">HARGA : </label></td>
                    <td><input type="text" name="harga" id="harga" class="input1" required value="<?= $mhs['harga'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="gmail">GMAIL : </label></td>
                    <td><input type="text" name="gmail" id="gmail" class="input1" required value="<?= $mhs['gmail'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="merek">MEREK : </label></td>
                    <td><input type="text" name="merek" id="merek" class="input1" required value="<?= $mhs['merek'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="gambar">GAMBAR BUKU</label></td>
                    <td><div>
                    <input type="radio" id="gambar" name="gambar" value="images1.jpeg">
                    <label for="gambar">psikotes</label><br>
                    <input type="radio" id="gambar" name="gambar" value="images2.jpeg">
                    <label for="gambar">jualan</label><br>
                    <input type="radio" id="gambar" name="gambar" value="images3.jpeg">
                    <label for="gambar">dunia ana</label><br>
                    <input type="radio" id="gambar" name="gambar" value="images4.jpeg">
                    <label for="gambar">ayah</label><br>
                    <input type="radio" id="gambar" name="gambar" value="images5.jpeg">
                    <label for="gambar">minako</label><br>
                    </label></div></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit" class="bttn ">Ubah Data!</button></td>
                </tr>
    
            </table>

        </div>
    </form>

</body>
</html>

