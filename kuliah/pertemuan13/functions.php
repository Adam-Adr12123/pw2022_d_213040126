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
    
    // upload gambar
    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
            ('', '$nama', '$npm', '$email','$jurusan','$gambar')
            
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
};


function upload(){

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gamvar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if($error === 4){
        echo "<script>
                alert('pilih gambar dulu')
            </script>";
        return false;    
    }

    //cek apakah yang di upload adalah gambar
    $ekstensigambarvalid = ['jpg','jpeg','png'];
    $ekstensigambar = explode('.', $namaFile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if( !in_array($ekstensigambar, $ekstensigambarvalid)){
        echo "<script>
            alert('yang di upload bukan gambar!!')
        </script>";
        return false;
    }

    // cek ukuran gambar jika terlalu besar
    if ($ukuranFile > 100000){
        echo "<script>
            alert('ukuran gambar terlalu besar!!')
        </script>";
        return false;
    }

    //lolos pengecekan gambar
    // generate nama gambar baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    move_uploaded_file($tmpName, 'img/' . $namafilebaru);
    return $namafilebaru;

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
    $gambarlama = htmlspecialchars($data["gambarlama"]) ;


    //cek apakah user pilih gambar atau tidak

    if($_FILES['gambar']['error']=== 4){
        $gambar = $gambarlama;

    } else {
        $gambar = upload();

    };
    $gambarlama = htmlspecialchars($data["gambar"]);
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


function cari($keyword){
    $query = "SELECT * FROM mahasiswa
        WHERE
        nama LIKE '%$keyword%' OR
        npm LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'
    ";

    return query($query);
}

?>