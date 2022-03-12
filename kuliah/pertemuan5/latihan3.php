<!-- latihan 3 dikampus -->


<!-- <?php 
//representasi data mahasiswa

$mahasiswa = [
    ["Adam", "213040126", "emailtes1@gmail.com", "teknik informatika"],
    ["Adre", "213040190", "emailtes2@gmail.com", "teknik mesin"],
    ["Al-Mualim", "213040900", "emailtes3@gmail.com", "teknik pangan"],
    ["Khoirul", "213040000", "emailtes4@gmail.com", "teknik informatika"]
];

print_r($mahasiswa);
echo "<hr>";

?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Nama Mahasiswa</title>
</head>
<body>
    
    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama    : <?= $mhs[0]; ?></li>
        <li>Nrp     : <?= $mhs[1]; ?></li>
        <li>E-mail : <?= $mhs[2]; ?></li>
        <li>Jurusan  : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach ; ?>
    
</body>
</html> -->


<!-- latihan 3 di video -->
<?php 

$mahasiswa = [["Adam", "213040126", "Teknik Informatika", "tesemail@gmail.com"],["Adre", "213040999", "Teknik Mesin", "tesemail2@gmail.com"],["Al-Mualim", "213040998", "Teknik Informatika", "tesemail3@gmail.com"]];

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
    <li>Nama    : <?= $mhs[0]; ?></li>
    <li>Nrp     : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>E-mail  : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach ; ?>

</body>
</html>