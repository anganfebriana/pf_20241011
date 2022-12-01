<?php
// array multidimensi
// array di dalam array

$mahasiswa = [
    ["Anganr", "20241011", "PTI", "anganfebriana90@gmail.com"],
    ["Citra", "20241022", "PTI", "citrra@undikma.ac.id"],
    ["Gilang", "20241011", "PTI", "gilang@gmail.com"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array Multi dimensi</title>
</head>
<body>
    <h1> Daftar Biodata Mahasiswa</h1>

    <ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM :<?= $mhs[1]; ?></li>
        <li>Email: <?= $mhs[3]; ?></li>
        <br>
        <?php endforeach; ?>

    </ul>
</body>
</html>