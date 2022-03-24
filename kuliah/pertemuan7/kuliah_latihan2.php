<?php ?>


<!DOCTYPE html>
<html>
<head>
    <title>Coba GET</title>
</head>
<body>
    <!-- mengirim data menggunakan get -->
    <a href="kuliah_latihan3.php?nama=adre">Kirim Data Nama</a>
    <hr>
    <!-- mengirimkan data menggunakan post  -->
    <h3>Log In Form</h3>
    <form action="kuliah_latihan3.php" method="POST">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>