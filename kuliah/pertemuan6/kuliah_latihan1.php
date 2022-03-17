<?php
//array assossiative
//array yang key nya ber-sosiasi/ berpasangan dengen string 
$mahasiswa = [
    [
        "nama"=>"Adam", 
        "npm"=>"213040126", 
        "email"=>"emailtes1@gmail.com", 
        "jurusan"=>"teknik informatika"
        
    ],
    [
        "nama"=>"Adre",
        "npm"=> "213040190",
        "email"=> "emailtes2@gmail.com",
        "jurusan"=> "teknik mesin"
    ],
    [
        "nama"=>"Al-Mualim",
        "npm"=> "213040900",
        "email"=> "emailtes3@gmail.com",
        "jurusan"=> "teknik pangan"
    ],
    [
        "nama"=>"Khoirul",
        "email"=> "emailtes4@gmail.com",
        "npm"=> "213040000",
        "jurusan"=> "teknik informatika"
        
    ],
    [
        "nama"=>"Khoirul",
        "email"=> "emailtes4@gmail.com",
        "npm"=> "213040000",
        "jurusan"=> "teknik informatika"
        
    ],
];

//var_dump($mahasiswa[2]);



?>


<!DOCTYPE html>
<html>
<head>
    
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>


<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama    : <?= $mhs["nama"]; ?></li>
    <li>Nrp     : <?= $mhs["npm"]; ?></li>
    <li>E-mail  : <?= $mhs["email"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach ; ?>

</body>
</html>