<?php 

require 'functions.php';



if(isset($_POST["register"])){

    if(registrasi($_POST) > 0){
        echo "<script>
            alert('User baru telah Ditambah');


        </script>";
        header("location: login.php");
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

    
    
    <title>Registrasi</title>
    
</head>
<body>
    <div class="formulir">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 center">
                    <img src="asset/logov2.png" class="logogin " height="150px"  alt="">

                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 formulir-d">
                    <h1 class="atasform text-center">Pendaftaran</h1>
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-10">
                            <form method="post" autocomplete="off">
                                
                                <div class="mb-3">
                                    <label for="username" class="form-label">Masukan Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Masukan Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="password2" class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="password2" name="password2">
                                </div>
                                <div class="mb-3 ">
                                    
                                    <label class="" for="exampleCheck1">Sudah punya akun? <a href="login.php">Login Disini</a></label>
                                </div>
                                <div class="row justify-content-between pembatas">
                                    <div class="col-4">
                                        <a href="admin.php" class="btn btn-outline-danger" name="batal">Batal</a>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary" name="register">Registrasi</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>

                        </div>
                    </div>
                    
                   
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