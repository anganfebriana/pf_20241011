<?php 
// standar output di php
//  echo, print

//var_dump ("Hello world!");

//$nama = "Angan Febriana";
//echo "Hello, Nama saya $nama";

// operator
// aritmatika
// * / + %

// $x =  10;
// $y = 20;
// echo $x + $y;

// // penggabungan string / concatenation / concat
// // .
// $nama_depan = "Angan";
// $nama_belakang = "Febriana";
// echo $nama_depan ." ". $nama_belakang;

// Assignment
// =, +=, -=, *=

// //$x = 1;
// $x -= 5;
// echo $x;
// $nama .= $nama_depan;
// $nama .= " ";
// $nama .= $nama_belakang;
// echo $nama;

//if else if
$n= 90;
if( $n < 50 ) {
    echo "E";
} else if ($n >= 51 && $n <= 60 ){
    echo "D" ;
}
else if( $n >= 61 && $n <= 70 ){
    echo "C";
}

else if ( $n >= 71 && $n <= 80 ){
    echo "B";
}
else{
    echo "A";
}


