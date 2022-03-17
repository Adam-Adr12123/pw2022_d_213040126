<?php

// $mahasiswa = [["Adam", "213040126","tesmail@gmail.com","teknik informatika"],["adre","213040199","tesmail2@gmail.com","teknik mesin"]];

//array associative
//key-nya adalah string yang kita buat sendiri

$mahasiswa =[
    [
    "nama"=>"Adam",
    "email"=>"tesemail@gmail.com",
    "nrp"=>"210340126",
    "jurusan"=>"teknik informatika",
    "gambar"=> "Adam.jpg"
    ],
    [
    "nama"=>"Adre",
    "nrp"=>"210340199",
    "email"=>"tesemail2@gmail.com",
    "jurusan"=>"teknik mesin",
    "gambar"=> "adre.png"
    

    ],
    [
        "nama"=>"khoirul",
        "nrp"=>"210340199",
        "email"=>"tesemail3@gmail.com",
        "jurusan"=>"teknik informatika",
        "gambar"=> ""
        
    
        ]
];


?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"];?>">

        </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>