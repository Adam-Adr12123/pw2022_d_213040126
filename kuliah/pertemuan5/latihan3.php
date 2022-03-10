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