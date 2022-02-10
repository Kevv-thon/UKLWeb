<?php
    session_start();
    include '../connect.php';
    $qry_laundry = mysqli_query($connect, "select * from paket");

    $id = $_POST['id'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    $query = "UPDATE paket SET jenis = '$jenis', harga = '$harga' WHERE id = $id";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if ($result) {
        if($_SESSION['role'] == 'admin') {
            echo "<script>alert('Paket berhasil diupdate');location.href='read.php';</script>";
        }
        if($_SESSION['role'] == 'kasir') {
            echo "<script>alert('Paket berhasil diupdate');location.href='read.php';</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='form-update.php';</script>";
    }
    


?>