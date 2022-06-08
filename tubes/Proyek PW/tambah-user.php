<?php 

session_start();

if (!isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}

require 'functions.php';

//cek ketika tombol di klik
if(isset($_POST['tambah'])){

    // var_dump($_POST);
    
    

    //tambah data ke tabel murid

    if(tambah($_POST) > 0){
        echo" <script> 
        
            alert('data berhasil ditambah!');
            document.location.href ='index-afterd.php';
        
        </script> ";
    } ;
    


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    
    <title>Pendaftaran</title>
    
</head>
<body>
    <div class="formulir">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-sm-6 formulir-d">
                    <h1 class="text-center atasform">Formulir Pendaftaran</h1>
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-10">
                            <form method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="mb-6 ">
                                    <div class="text-center">
                                        <label for="foto_profil" class="form-label text-center">Foto Profil</label>

                                    </div>
                                    
                                    <img src="" class="img-thumbnail rounded mx-auto d-blockr" width="150" style="display: none;" id="img-preview">
                                    <label for="foto_profil" class="form-label">Pastikan Foto sudah 1/1 dan dibawah 1 Mb</label>
                                    <input type="file" class="form-control" id="foto_profil" name="foto_profil" onchange="previewImage() "   >
                                    
                                </div>
                                <div class="mb-6">
                                    <label for="nama" class="form-label">Masukan Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" >
                                    
                                </div>
                                <div class="mb-6">
                                    <label for="alamat" class="form-label">Masukan Alamat Domisili</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" >
                                    
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="form-label">Masukan Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                    
                                </div>
                                <div class="mb-6">
                                    <label class="form-label">Kelas</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kelas" id="kelas" value="7">
                                        <label class="form-check-label" >7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kelas" id="kelas" value="8">
                                        <label class="form-check-label" >8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kelas" id="kelas" value="9">
                                        <label class="form-check-label" >9</label>
                                    </div>
                                    <br>
                                </div>
                                <div class="mb-3">
                                    <label for="sekolah" class="form-label">Asal sekolah</label>
                                    <input type="text" class="form-control" id="sekolah" name="sekolah">
                                </div>

                                <div class="mb-3">
                                    <label for="umur" class="form-label">Masukan umur</label>
                                    <input type="number" class="form-control" id="umur" name="umur" maxlength="2">
                                </div>
                                
                                <div class="row justify-content-between pembatas">
                                    <div class="col-4">
                                        <a href="index.php" class="btn btn-outline-danger" name="batal">Batal</a>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary" name="tambah">Daftar</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>

                        </div>
                    </div>
                    <h1></h1>
                   
                </div>
            </div>
            <div class="row">
                
            </div>


        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="js/script.js"> </script>
</body>
</html>