<?php 

// // variable scope / lingkup variabel
// $x =10;

// function tampilx(){

//     //$x = 20;
//     global $x;
//     echo $x;
// }


// tampilx();
// //echo"<br>";
// //echo $x;

// Superglobal
// variabel global milik php
// merupakan array assosiative

// $_GET
$mahasiswa =[
    [
        "nama"=>"Adam", 
        "npm"=>"213040126", 
        "email"=>"emailtes1@gmail.com", 
        "jurusan"=>"teknik informatika",
        "gambar" => "Adam.jpg"
        
    ],
    [
        "nama"=>"Adre",
        "npm"=> "213040190",
        "email"=> "emailtes2@gmail.com",
        "jurusan"=> "teknik mesin",
        "gambar" => "Adre.PNG"
    ],
    [
        "nama"=>"Al-Mualim",
        "npm"=> "213040900",
        "email"=> "emailtes3@gmail.com",
        "jurusan"=> "teknik pangan",
        "gambar" => "almualim.jpg"
    ],
    [
        "nama"=>"Khoirul",
        "email"=> "emailtes4@gmail.com",
        "npm"=> "213040000",
        "jurusan"=> "teknik informatika",
        "gambar" => "khoirul.jpg"
        
    ],
];




?>



<!DOCTYPE html>
<html>
<head>
    <title>Get</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"
                ><?= $mhs["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>