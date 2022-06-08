<?php 

session_start();
require 'functions.php';
$conn = koneksi();

// //cek cookie
// if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
//     $id = $_COOKIE['id'];
//     $key = $_COOKIE['key'];

//     //ambil username berdasarkan id
//     $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
//     $row = mysqli_fetch_assoc($result);

//     //cek cookie dan username
    
//     if($key === hash('sha256', $row['username']) ){
        
//         $_SESSION['logina'] = true;
            
//     }

   
//     if($key === hash('sha256', $row['username']) ){
        
//         $_SESSION['login'] = true;
            
//     }

// }

// if (isset($_SESSION["logina"])){
//   header("location: admin.php");
//   exit;
// }

// if (isset($_SESSION["login"])){
//     header("location: index.php");
//     exit;
// }



if(isset($_POST["login"]) ){
    

    $username = $_POST["username"];
    $password = $_POST["password"];


    //cek username admin
    $result = (mysqli_query($conn, "SELECT * FROM user WHERE username = 'admin'"));
    if(mysqli_num_rows($result) === 1){


        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ){

            //set session
            $_SESSION["login"] = true;

            // //cek ingat saya
            // if( isset($_POST['remember'])){
            //     //buat cookie

            //     setcookie('id', $row['id'], time()+60);
            //     setcookie('key', hash('sha256', $row['username']), time()+60);

            // }

            header("location: admin.php");
            exit;
        } 
    }

    $error = true;

    //cek user 
    $result = (mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'"));

    if(mysqli_num_rows($result) === 1){


        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ){
            //set session
            $_SESSION["login"] = true;

            // //cek ingat saya
            // if( isset($_POST['remember'])){
            //     //buat cookie

            //     setcookie('id', $row['id'], time()+60);
            //     setcookie('key', hash('sha256', $row['username']), time()+60);
                

            // }

            header("location: index.php");
            exit;
        } 
    }
    $error = true;

    

   
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

    
    
    <title>Halaman Login</title>
    
</head>
<body>
    <div class="formulir">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 center">
                    <img src="asset/logov2.png" class="logogin " height="150px"  alt="">

                </div>

            </div>
            
            <div class="row justify-content-center">
                
                <div class="col-sm-6 formulir-d">
                    <h1 class="text-center atasform" >LOGIN</h1>
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-10">
                            <form action="" method="post" autocomplete="off">
                                <div class="mb-3 text-center">
                                    <?php if(isset($error)) :?>
                                        <p class="peringatan">Username atau password SALAH</p>
                                    <?php endif; ?>
                                </div>

                                
                                <div class="mb-3">
                                    
                                    <label for="username" class="form-label">Masukan Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Masukan Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    
                                    
                                </div>
                                
                                
                                <div class="mb-3 ">
                                    
                                    <label class="" for="exampleCheck1">Belum punya akun? <a href="registrasi.php">Daftar Disini</a></label>
                                </div>
                                <div class="row justify-content-between pembatas">
                                    <!-- <div class="col-4">
                                        <a href="admin.php" class="btn btn-outline-danger" name="batal">Batal</a>
                                    </div> -->
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                                        
                                        
                                        
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