
<?php 

session_start();


if (!isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}

require 'functions.php';




?>




<!doctype html>
<html >
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Proyek LATKUS us</title>
  </head>
  <body>
    <!-- navbar -->
    
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-light bgnav fixed-top">
        <div class="container-fluid">
          
          
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <a class="navbar-brand" href="#"> <img class="logonav" src="asset/logov2.png" height="40px" alt="" style="text-align: center;"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              
              </div>
              
              
              
            </ul>
            <form class="d-flex" method="get">
              
              <a class="btn btn-primary me-2 tombol" href="tambah-user.php">Daftar</a>
              

            </form>
            
            
          </div>
        </div>
      </nav>
    </div>

    <!-- end navbar -->
    <!-- jumbot -->
    <div class="jumbotron text-center" id="home">
        <h1>Kursus GRATIS Untuk SMP telah Hadir Di<br>  <img src="asset/logov2.png" alt="" height="350px"> </h1>
        
    </div>
    <section class="jumbotron">
      <div class="container">
        <h1></h1>
      </div>
    </section>
    

    <section class="det" id="det">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2><span>PILIHAN</h2>
              <hr>
          </div>               
        </div> 
        <div class="row text-center">
          <div class="col-sm-4">
            <h3>Kelas 7</h3>

          </div>
          <div class="col-sm-4">
            <h3>Kelas 8</h3>
          </div>
          <div class="col-sm-4">
            <h3>Kelas 9</h3>
          </div>
          <div class="card-group">
            <div class="card">
              <img src="asset/ikls7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dapatkan Rangking</h5>
                <p class="card-text">Dapatkan Rangking Setelah Memasuki Sekolah Barumu</p>
                
              </div>
            </div>
            <div class="card">
              <img src="asset/ikls8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pertahankan Rangking</h5>
                <p class="card-text">Jangan Biarkan Orang Lain Merebut Rangkingmu, Sekaligus Tingkatkan Kemampuanmu</p>
                
              </div>
            </div>
            <div class="card">
              <img src="asset/ikls9.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lulus UN</h5>
                <p class="card-text">Buat Orang tuamu bangga dengan prestasimu karena mendapatkan SMA/SMK favorit</p>
                
              </div>
            </div>
          </div>

        </div>
        <div class="row text-center ">
          <div class="col-sm-12 dap" >
            <h5 style="padding: top 30px; ">Dapatkan Sekarang Disini </h5>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-sm-12">
            <a class="btn btn-outline-primary me-2 tombol" href="tambah-user.php">Daftar</a>
          </div>
        </div>
       
        
        
      </div>
    </section>

    <footer class="bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 widget">
						<div class="widget-body">
							<p class="text-right text-center footext">
								Copyright &copy; 2022 
							</p>
						</div>
					</div>
				</div>
			</div>
    </footer>

    
    

    
    


      






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