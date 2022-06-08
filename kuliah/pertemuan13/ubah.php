<?php 
require 'functions.php';

// ambil data di url
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah di tekan atau belum
 if(isset($_POST["submit"])){
     

    //cek apakah data berhasil di ubah atau tidak
    if(ubah($_POST)> 0){
        echo "
        <script>
            alert('data berhasil di ubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal di ubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
    
    
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ubah data Mahasiswa</title>
</head>
<body>
    <h1>ubah data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">

        <ul>
            <li>
                <label for="npm">NPM</label>
                <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>" >
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>" > 
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>" > 
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>" > 
            </li>
            <li>
                <label for="gambar">gambar</label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" alt="" width="100"> <br>
                <input type="file" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>" > 
            </li>
            <li>
                <button type="submit" name="submit">ubah data</button>
            </li>
            
        </ul>



    </form>
    
</body>
</html>