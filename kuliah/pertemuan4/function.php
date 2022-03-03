<?php 

function salam($waktu = "datang", $nama ="Admin"){
    return "selamat $waktu, $nama";
}

?> 


<!DOCTYPE html>
<html>
<head>
    
    <title>Latihan Function</title>
</head>
<body>
    <!-- <h1> <?= salam("sore","Adam");?> </h1> -->
    <h1> <?= salam("siang");?> </h1>
</body>
</html>