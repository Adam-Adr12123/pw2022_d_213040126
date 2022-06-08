<?php 

function koneksi(){
    $conn = mysqli_connect('localhost','root','','pw2022_d_213040126') or die('Koneksi ke DB GAGAL!');

    return $conn;
}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    

    // Siapkan data $mahasiswa
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }

    return $rows;

}

function tambah($data){
    $nama = htmlspecialchars($data["nama"]) ;
    $npm = htmlspecialchars($data["npm"]) ;
    $email = htmlspecialchars($data["email"]) ;
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = $data["gambar"];

    $conn = koneksi();
    $query = "INSERT INTO mahasiswa VALUES (null, '$nama','$npm','$email','$jurusan','$gambar')";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id){
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}




?>