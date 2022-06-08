<?php 

session_start();

if (!isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}

require 'functions.php';




$id_murid = $_GET["id_murid"];

$mrd = query("SELECT * FROM murid WHERE id_murid = $id_murid")[0];
// var_dump($mrd["foto_profil"]); die;










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

    
    
    <title>profil</title>
    
</head>
<body>
    <div class="formulir">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-sm-6 formulir-d">
                    <h1 class="text-center atasform">Profil Murid</h1>
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-10">
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_murid" value="<?= $mrd["id_murid"]; ?>">
                                <input type="hidden" name="gambarLama" value="<?= $mrd["foto_profil"]; ?>">
                                <div class="mb-6">
                                    <div class="text-center ">
                                        <label for="foto_profil" class="form-label text-center">Foto Profil</label>

                                    </div>
                                    <div class="text-center">
                                        
                                        <img class="img-thumbnail rounded mx-auto d-blockr" src="img/<?=$mrd["foto_profil"]; ?>" alt="" width="150">
                                        
                                    

                                    </div>

                                    
                                </div>
                                <div class="mb-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $mrd["nama"]; ?>" readonly>
                                    
                                </div>
                                <div class="mb-6">
                                    <label for="alamat" class="form-label">Alamat Domisili</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mrd["alamat"]; ?>" readonly>
                                    
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $mrd["email"]; ?>" readonly>
                                    
                                </div>
                                <div class="mb-6">
                                    <label class="form-label">Kelas</label>
                                    <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $mrd["kelas"]; ?>" readonly>
                                    <!-- <br>
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
                                    <br> -->
                                </div>
                                <div class="mb-3">
                                    <label for="sekolah" class="form-label">Asal Sekolah</label>
                                    <input type="text" class="form-control" id="sekolah" name="sekolah" value="<?= $mrd["sekolah"]; ?>" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="umur" class="form-label">umur</label>
                                    <input type="text" class="form-control" id="umur" name="umur" value="<?= $mrd["umur"]; ?>" readonly>
                                </div>
                                
                                <div class="row justify-content-between">
                                    <div class="col-4">
                                        <a href="user-data.php" class="btn btn-outline-danger" name="batal">Kembali</a>
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
</body>
</html>