<?php 

// koneksi database
$conn = mysqli_connect("localhost","root","","pw2022_d");




function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;
    $npm = htmlspecialchars($data["npm"]) ;
    $nama = htmlspecialchars($data["nama"]) ;
    $email = htmlspecialchars($data["email"]) ;
    $jurusan = htmlspecialchars($data["jurusan"]) ;
    $gambar = htmlspecialchars($data["gambar"]) ;

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
            ('', '$nama', '$npm', '$email','$jurusan','$gambar')
            
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
};


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);

}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $npm = htmlspecialchars($data["npm"]) ;
    $nama = htmlspecialchars($data["nama"]) ;
    $email = htmlspecialchars($data["email"]) ;
    $jurusan = htmlspecialchars($data["jurusan"]) ;
    $gambar = htmlspecialchars($data["gambar"]) ;

    // query insert data
    $query = "UPDATE mahasiswa SET

        nama = '$nama',
        npm ='$npm',
        email = '$email',
        jurusan = '$jurusan',
        gambar = '$gambar'
        WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>