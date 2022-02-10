<?php
    session_start();
    include '../connect.php';
    

    if ($_SESSION['role'] == 'admin') {
        include '../header.php';
    } else {
        include '../header2.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Register</title>
</head>
<body>
<h2>Register</h2>

<form action="register.php" method="POST">
    nama:
    <input type="text" name="nama" value=""><br>

    alamat :
    <input type="text" name="alamat" value=""><br>

    <label for="jenis_kelamin">Jenis kelamin : </label>
    <select name="jenis_kelamin" id="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>

    telp :
    <input type="text" name="telp" value=""><br>

    <input type="submit" value="REGISTER">



</body>
</html>