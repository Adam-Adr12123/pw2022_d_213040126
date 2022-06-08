<?php

use LDAP\Result;

function koneksi(){
    // Koneksi Ke DB
    $conn = mysqli_connect('localhost','root','','proyek_latkus') or die('Koneksi ke DB GAGAL!');
    return $conn;


}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    

    // Siapkan data $murid
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }

    return $rows;

}

function tambah($data){
    $conn = koneksi();

    if($_FILES["foto_profil"]["error"] === 4){
        //jika user tidak memilih gambar beri gambar default
        $foto_profil='nophoto.jpg';

    } else {
        // jika user memilih gambar jalankan fungsi upload
        $foto_profil=upload();

        if(!$foto_profil){
            return false;
        }

        // CEK APAKAH UPLOAD BERHASIL
    }

    // if($_FILES["foto_profil"]["error"] === 4){
    //     //jika user tidak memilih foto_profil beri foto_profil default
    //     $foto_profil='nophoto.jpg';

    // } else {
    //     // jika user memilih foto_profil jalankan fungsi upload
    //     $foto_profil=upload();

    //     if(!$foto_profil){
    //         return false;
    //     }

    //     // CEK APAKAH UPLOAD BERHASIL
    // }
    
    $nama = htmlspecialchars($data["nama"]) ;
    $alamat = htmlspecialchars($data["alamat"]) ;
    $email = htmlspecialchars($data["email"]) ;
    $kelas = htmlspecialchars($data["kelas"]) ;
    $sekolah = htmlspecialchars($data["sekolah"]);
    $umur = htmlspecialchars($data["umur"]);
    

    
    $query = "INSERT INTO murid VALUES (null,'$foto_profil','$nama','$alamat','$email','$kelas','$sekolah','$umur')";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function hapus($id_murid){
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM murid WHERE id_murid = $id_murid") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}


function ubah($data){
    $conn = koneksi();

    $id_murid = $data["id_murid"];

    $gambarLama = htmlspecialchars($data["gambarLama"]) ;
    //cek apakah user pilih gambar atau tidak

    if($_FILES['foto_profil']['error']=== 4){
        $foto_profil = $gambarLama;

    } else {
        $foto_profil = upload();

    };
    
    

    
    $nama = htmlspecialchars($data["nama"]) ;
    $alamat = htmlspecialchars($data["alamat"]) ;
    $email = htmlspecialchars($data["email"]) ;
    $kelas = htmlspecialchars($data["kelas"]) ;
    $sekolah = htmlspecialchars($data["sekolah"]);
    $umur = htmlspecialchars($data["umur"]);

    
    $query = "UPDATE murid SET 
        foto_profil ='$foto_profil', 
        nama ='$nama',
        alamat='$alamat',
        email='$email',
        kelas='$kelas',
        sekolah='$sekolah',
        umur='$umur'
        WHERE id_murid = $id_murid";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}



function upload(){
    // //siiapkan data gambar

    // $filename = $_FILES["foto_profil"]["name"];
    // $filesize = $_FILES["foto_profil"]["size"];
    // $filetmpname = $_FILES["foto_profil"]["tmp_name"];

    // $filetype=pathinfo($filename,PATHINFO_EXTENSION);
    // $allowedtype=["jpg","jpeg","png"];

    // //cek apakah file bukan gamabar

    // if(!in_array($filetype,$allowedtype)){
    //     echo "<script>
    //         alert('yang anda upload bukan gambar');
        
    //         </script>";

    //     return false;
    
    // }

    // // cek jika ukuran lebih besar daari satu mega

    // if($filesize>1000000){
    //     echo "<script>
    //         alert('ukuran gambar terlalu besar');
        
    //         </script>";

    //     return false;

    // }

    // // lolos pengecekan gambar
    // // buat nama file baru
    // $newfilename = uniqid(). $filename;

    // // upload gambar 
    // move_uploaded_file($filetmpname, 'img/' . $newfilename);

    // return $newfilename;

    $namaFile = $_FILES['foto_profil']['name'];
    $ukuranFile = $_FILES['foto_profil']['size'];
    $error = $_FILES['foto_profil']['error'];
    $tmpName = $_FILES['foto_profil']['tmp_name'];

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
    if ($ukuranFile > 1000000){
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


function registrasi($data){
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    // cek username yang sama
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
            alert('Username sudah ada coba yang lain')
        </script>";
        return false;

    }

    // cek konfirmasi password

    if($password !== $password2){
        echo "<script>
            alert('Password tidak sesuai')
        </script>";
        return false;


    }
    

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    
    //tambahkan userbaru di database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username','$password')");
    return mysqli_affected_rows($conn);

}








?>