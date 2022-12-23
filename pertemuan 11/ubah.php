<?php 
require 'function.php';

// ambil data via URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id= $id")[0];

// cek data 
var_dump($mhs ["nama"]); die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> Ubah Data </title>
</head>
<body>
    <h1> Halaman Ubah Data Mahasiswa</h1>

<form action="" method="post">
    <input type="hidden" name ="id" value="<?= $mhs["id"];?>">

        <ul>
            
<li>
<label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required value='<?= $mhs[nama];?">
</li>
<li>
<label for="nama">NIM: </label>
                <input type="text" name="nim" id="nim" required value='<?= $mhs[nim];?">
 <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required value='<?= $mhs[nama];?">
<label for="nama">Email : </label>
                <input type="text" name="email" id="email" required value='<?= $mhs[email];?">
 <label for="nama">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" required value='<?= $mhs[jurusan];?">
 <label for="nama"> Gambar: </label>
                <input type="text" name="gambar" id="gambar" required value='<?= $mhs[gambar];?">
        
</li>
<li>
<label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan">
</li>
<li>
<label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar">
</li>
<li>
<button type="submit" name="submit">Simpan</button>
</li>

</ul>
</form>

<a href="index.php">kembali..</a>
    
</body>
</html>