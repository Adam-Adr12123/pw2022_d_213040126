<!-- latihan 1 dikampus -->

<!-- <?php
// Pertemuan 5- array 
//array adalah variabel yang dapat menyimpan banyak nilai sekaligus

$hari1= "senin";
$hari2= "selasa";


$bulan1= "januari";
$bulan2= "februari";


// membuat array
$hari = ["senin","selasa","rabu","kamis","jum'at"]; //array versi baru
$bulan = array("januari", "februari","maret");

// mencetak array
// menggunakan index, dimulai dari 0
echo $hari[0];

echo "<br>";

echo $bulan[2];

echo "<br>";
// mencetak menggunakan var-dump() atau print_r()
// hanya untuk debuginag

var_dump($hari);

echo "<br>";
print_r($bulan);

echo "<hr>";


// mencetak untuk user 
// menggunakan looping

for($i=0; $i< count($hari); $i++){
    echo $hari[$i];
    echo "<br>";
}


echo "<br>";

// menggunakan foreach
// pengulangan khusus array

foreach($bulan as $bln){
    echo $bln;
    echo "<br>";
}

echo "<hr>";

// memanipulasi array
//menambah 1 element diakhir

$hari[]="sabtu";
$hari[]="minggu";

print_r($hari);

echo "<br>";


$bulan[]="april";
$bulan[]="mei";

print_r($bulan);



?> -->




<!-- latihan 1 di video -->
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