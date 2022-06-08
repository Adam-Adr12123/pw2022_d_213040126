
<?php 

session_start();



if (!isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}

require 'functions.php';
// $conn = koneksi();
//$murid = query("SELECT * FROM murid");

//pagination 
//konfigurasi

// $jumlahdataperhalaman = 2;

// $jumlahdata = count(query("SELECT * FROM murid"));
// $jumlahhalaman = ceil($jumlahdata/$jumlahdataperhalaman);
// $halamanaktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// $awaldata = ($jumlahdataperhalaman * $halamanaktif)- $jumlahdataperhalaman ;



$murid = query("SELECT * FROM murid ");



//query tabel murid sesuai tabel pebcarian

if(isset($_GET["cari"])){
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM murid
            WHERE nama LIKE '%$keyword%'
            OR id_murid LIKE '%$keyword%'
            OR alamat LIKE '%$keyword%'
            
            OR email LIKE '%$keyword%'
            OR sekolah LIKE '%$keyword%'
            ";
  $murid= query($query);
}

if(isset($_GET["sma"])){
  
  $query = "SELECT * FROM `murid`";
  $murid= query($query);
}




//kleas 7

if(isset($_GET["7A-Z"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '7' ORDER BY `nama` ASC";
  $murid= query($query);
}


if(isset($_GET["7Z-A"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '7' ORDER BY `nama` DESC";
  $murid= query($query);
}

if(isset($_GET["71-9"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '7'  ORDER BY `umur` ASC";
  $murid= query($query);
}

if(isset($_GET["79-1"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '7' ORDER BY `umur` DESC";
  $murid= query($query);
}

//kleas 8
if(isset($_GET["8A-Z"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '8' ORDER BY `nama` ASC";
  $murid= query($query);
}


if(isset($_GET["8Z-A"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '8' ORDER BY `nama` DESC";
  $murid= query($query);
}

if(isset($_GET["81-9"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '8'  ORDER BY `umur` ASC";
  $murid= query($query);
}

if(isset($_GET["89-1"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '8' ORDER BY `umur` DESC";
  $murid= query($query);
}

//kleas 9
if(isset($_GET["9A-Z"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '9' ORDER BY `nama` ASC";
  $murid= query($query);
}


if(isset($_GET["9Z-A"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '9' ORDER BY `nama` DESC";
  $murid= query($query);
}

if(isset($_GET["91-9"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '9'  ORDER BY `umur` ASC";
  $murid= query($query);
}

if(isset($_GET["99-1"])){
  
  $query = "SELECT * FROM `murid` WHERE `kelas` LIKE '9' ORDER BY `umur` DESC";
  $murid= query($query);
}


?>




<!doctype html>
<html >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
      /* pdf reporting */
      @media print {
        .tombol-i, .formulir-cari, .logol, .navbarl, .aksi {
          display: none;
        }
        

        

      }

    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User-data</title>
  </head>
  <body>
    <!-- navbar -->
    
    <div class="navbarl">
      <nav class="navbar navbar-expand-lg navbar-light bgnav fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="index-afterd.php"> <img class="logonav" src="asset/logov2.png" height="40px" alt="" style="text-align: center;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link" href="#">Data Murid</a>
              </li>
              
              
              
              
              
            </ul>
            <form class="d-flex formulir-cari " method="get">
              <input class="form-control me-2 aksi" type="search" placeholder="Cari murid" aria-label="Search" name="keyword" id="keyword">
              <button class="btn btn-primary me-2 tombol aksi" type="submit" name="cari" id="tombol-cari">Cari</button>
              
              <a class="btn btn-danger tombol aksi" type="keluar" href="logout.php">Keluar</a>
              

            </form>
            
            
          </div>
        </div>
      </nav>
    </div>

    

    <!-- data murid -->
    <section class="data-murid">
      <div class="container murid-d">
        <div class="row justify-content-center">
          <div class="col-sm-12 konten-m">
            <h3>Data Murid</h3>

          </div>
          
        </div>
        <div class="row">
          <div class="col-sm-12 isi-murid">
          <div id="ajax">
            <table class="table table-hover table-borderless tt">
              <thead class="table-c rounded-top ">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID Murid</th>
                  <th scope="col">Foto Profil</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat Domisili</th>
                  <th scope="col">Email</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Asal Sekolah</th>
                  <th scope="col">Umur</th>
                  
                </tr>
              </thead>
              <tbody >
              <?php $i = 1; foreach($murid as $mrd) : ?>
                <tr>
                  <a href="">
                  <th scope="row" class="align-middle text-center"><?= $i++; ?></th>
                  <td class="align-middle text-center"><?= $mrd["id_murid"]; ?></td>
                  <td class="align-middle ">
                    <a href="profil-afterd.php?id_murid=<?= $mrd["id_murid"] ?>">
                      <img src="img/<?= $mrd["foto_profil"]; ?>" height="50" class="rounded-1">

                    </a>
                    
                  </td>
                  <td class="align-middle"><?= $mrd["nama"]; ?></td>
                  <td class="align-middle"><?= $mrd["alamat"]; ?></td>
                  <td class="align-middle"><?= $mrd["email"]; ?></td>
                  <td class="align-middle"><?= $mrd["kelas"]; ?></td>
                  <td class="align-middle"><?= $mrd["sekolah"]; ?></td>
                  <td class="align-middle"><?= $mrd["umur"]; ?></td>

                  </a>
                  
                  
                </tr>
                <?php endforeach; ?>
                
              </tbody>

                <div class="btn-group tombol-i justify-content-end" role="group" aria-label="Button group with nested dropdown">
                  
                  

                  <div class="btn-group tombol-i" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Urut Semua Berdasarkan
                    </button>
                    <form method="get">
                      <ul class="dropdown-menu aksi" aria-labelledby="btnGroupDrop1">
                        
                        
                        <button class="dropdown-item aksi" type="submit" name="A-Z">Nama A-Z</button>
                        <button class="dropdown-item aksi" type="submit" name="Z-A">Nama Z-A</button>
                        <button class="dropdown-item aksi" type="submit" name="1-9">Umur 1-9</button>
                        <button class="dropdown-item aksi" type="submit" name="9-1">Umur 9-1</button>
                        
                      </ul>
                    </form>

                    <button id="btnGroupDrop2" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Kelas 7
                    </button>
                    <form method="get">
                      <ul class="dropdown-menu aksi" aria-labelledby="btnGroupDrop2">
                        
                        
                        <button class="dropdown-item aksi" type="submit" name="7A-Z">Nama A-Z</button>
                        <button class="dropdown-item aksi" type="submit" name="7Z-A">Nama Z-A</button>
                        <button class="dropdown-item aksi" type="submit" name="71-9">Umur 1-9</button>
                        <button class="dropdown-item aksi" type="submit" name="79-1">Umur 9-1</button>
                        
                      </ul>
                    </form>

                    <button id="btnGroupDrop3" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Kelas 8
                    </button>
                    <form method="get">
                      <ul class="dropdown-menu aksi" aria-labelledby="btnGroupDrop3">
                        
                        
                        <button class="dropdown-item aksi" type="submit" name="8A-Z">Nama A-Z</button>
                        <button class="dropdown-item aksi" type="submit" name="8Z-A">Nama Z-A</button>
                        <button class="dropdown-item aksi" type="submit" name="81-9">Umur 1-9</button>
                        <button class="dropdown-item aksi" type="submit" name="89-1">Umur 9-1</button>
                        
                      </ul>
                    </form>

                    <button id="btnGroupDrop3" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Kelas 9
                    </button>
                    <form method="get">
                      <ul class="dropdown-menu aksi" aria-labelledby="btnGroupDrop3">
                        
                        
                        <button class="dropdown-item aksi" type="submit" name="9A-Z">Nama A-Z</button>
                        <button class="dropdown-item aksi" type="submit" name="9Z-A">Nama Z-A</button>
                        <button class="dropdown-item aksi" type="submit" name="91-9">Umur 1-9</button>
                        <button class="dropdown-item aksi" type="submit" name="99-1">Umur 9-1</button>
                        
                      </ul>
                    </form>
                  </div>
                  
                  
                  
                </div>
                
              
              <br>
            </table>
          </div>

          </div>
        </div>

      </div>
    </section>

    


      






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/ajax.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>