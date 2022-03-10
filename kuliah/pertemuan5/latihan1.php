<?php 

// array
// variabel yang dapat memiliki banyak nilai
// element pada boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array 
// cara lama

$hari = array("senin", "selasa", "rabu",);

// cara baru
$bulan = ["january", "februari", "maret"];
$arr1 = [123, "tulisan", false];


// menampilkan array
// var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);

//menampilkan 1 element pada array
// echo "<br>";
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

//menambah element baru pada array
var_dump($hari);
$hari[]="kamis";
$hari[]="jum'at";

echo "<br>";
echo $hari[3];
echo "<br>";
var_dump($hari);




?>