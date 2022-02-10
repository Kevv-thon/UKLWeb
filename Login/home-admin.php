<?php
    session_start();
    include '../header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Tab</title>
</head>
<body style="background-color:dark;">
    <h3 align="center" margin-top="100dp">Halo <?=$_SESSION['username']?>, anda berhasil login sebagai <?=$_SESSION['role']?></h3>
    
</body>
</html>