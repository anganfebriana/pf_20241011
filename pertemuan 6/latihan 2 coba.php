<?php
$mahasiswa = [
    ["nama" => "Adam Bachtiar",
     "nim" => "0708078505",
     "email" => "adambachtiar@undikma.ac.id",
     "jurusan" => "PTI"
    ],
    ["nama" => "Bachtiar",
                "nim" => "0708078505",
                "email" => "bachtiar@undikma.ac.id",
                "jurusan" => "PTI"
    ],
    ["nama" => "Otong Surotong",
                "nim" => "0708078505",
                "email" => "otongsurutong@undikma.ac.id",
                "jurusan" => "PTI"
    ]
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    <?php foreach (mahasiswa as $mhs ) : ?>
        <ul>
            <li> Nama : <? $mhs["nama"]; ?></li>
            <li> NIM  :<? $mhs["nim"]; ?></li>

    
</body>
</html>