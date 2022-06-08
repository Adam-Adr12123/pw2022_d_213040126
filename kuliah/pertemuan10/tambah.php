<?php 
require 'functions.php';

//cek apakah tombol submit sudah di tekan atau belum
 if(isset($_POST["submit"])){
     //ambil data dari tiap elemen dalam form
    // $npm = $_POST["npm"];
    // $nama = $_POST["nama"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // // query insert data
    // $query = "INSERT INTO mahasiswa
    //             VALUES
    //         ('', '$nama', '$npm', '$email','$jurusan','$gambar')
            
    //         ";
    // mysqli_query($conn, $query);

    //cek apakah data berhasil di tambahkan atau tidak
    if(tambah($_POST)> 0){
        echo "
        <script>
            alert('data berhasil di tambah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data berhasil di tambah');
            document.location.href = 'index.php';
        </script>
        ";
    }
    // if(mysqli_affected_rows($conn) > 0 ){
    //     echo"berhasil";

    // } else {
    //     echo"gagal";
    //     echo"<br>";
    //     echo mysqli_error($conn);
    // }
    
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data Mahasiswa</title>
</head>
<body>
    <h1>Tambah data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="npm">NPM</label>
                <input type="text" name="npm" id="npm" required>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required> 
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required> 
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required> 
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="text" name="gambar" id="gambar" required> 
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
            
        </ul>



    </form>
    
</body>
</html>