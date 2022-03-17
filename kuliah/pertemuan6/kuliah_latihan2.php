<?php 
$no =1;
$mahasiswa = [
    [
        "nama"=>"Adam", 
        "npm"=>"213040126", 
        "email"=>"emailtes1@gmail.com", 
        "jurusan"=>"teknik informatika",
        "gambar" => "Adam.jpg"
        
    ],
    [
        "nama"=>"Adre",
        "npm"=> "213040190",
        "email"=> "emailtes2@gmail.com",
        "jurusan"=> "teknik mesin",
        "gambar" => "Adre.PNG"
    ],
    [
        "nama"=>"Al-Mualim",
        "npm"=> "213040900",
        "email"=> "emailtes3@gmail.com",
        "jurusan"=> "teknik pangan",
        "gambar" => "almualim.jpg"
    ],
    [
        "nama"=>"Khoirul",
        "email"=> "emailtes4@gmail.com",
        "npm"=> "213040000",
        "jurusan"=> "teknik informatika",
        "gambar" => "khoirul.jpg"
        
    ],
    
];


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
            <thead>
                
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($mahasiswa as $mhs) : ?>
                <tr>
                    <th scope="row" class="align-middle" class="align-middle"><?= $no++; ?></th>
                    <td>
                        <img src="img/<?= $mhs["gambar"];?>" class="rounded-circle" height="50">
                    </td>
                    <td class="align-middle"><?= $mhs["nama"]; ?></td>
                    <td class="align-middle"><?= $mhs["npm"]; ?></td>
                    <td class="align-middle"><?= $mhs["email"]; ?></td>
                    <td class="align-middle"><?= $mhs["jurusan"]; ?></td>
                    <td class="align-middle">
                        <a href="" class=" btn badge bg-warning">edit</a>
                        <a href="" class=" btn badge bg-danger">delete</a>
                    </td>
                    <!-- <th scope="row" class="align-middle" class="align-middle"></th> -->
                    <!-- <td>
                        <img src="img/<?= $mhs["gambar"];?>">
                    </td>
                    <td class="align-middle">Adam</td>
                    <td class="align-middle">213040126</td>
                    <td class="align-middle">tesmail1@gmail.com</td>
                    <td class="align-middle">Teknik Informatika</td>
                    <td class="align-middle">
                        <a href="" class=" btn badge bg-warning">edit</a>
                        <a href="" class=" btn badge bg-danger">delete</a>
                    </td> -->
                </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>



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