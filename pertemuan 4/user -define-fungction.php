<?php
function salam($waktu, &nama) {
    return "Selamat $waktu, &nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1><?= salam("pagi", "Administrator "); ?></h1>
       <!-- <h1> Selamat pagi Administrator </h1> --> 
</body>
</html>