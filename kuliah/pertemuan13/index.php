<?php 
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");


// tombol cari di tekan
if( isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data Mahasiswa</a>
    <br><br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="50" autofocus placeholder="masukan pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>

    </form>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>

        </tr>
        <?php $i =1;?>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td><?= $i ; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>" onclick="return confirm('yakin untuk mengubah?');">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin untuk menghapus?');" >Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"];?>" width="100" alt=""></td>
            <td><?= $row["npm"];?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["jurusan"];?></td>
        </tr>
        <?php $i++?>
        <?php endforeach; ?>

    </table>
</bmody>
</html>