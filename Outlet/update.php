<?php
    session_start();
    include '../connect.php';
    $qry_laundry = mysqli_query($connect, "select * from outlet");

    $id = $_POST['id'];
    $nama_outlet = $_POST['nama_outlet'];
    $alamat = $_POST['alamat'];
    $owner = $_POST['owner'];

    $query = "UPDATE outlet SET nama_outlet = '$nama_outlet', alamat = '$alamat', owner = '$owner' WHERE id = $id";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if ($result) {
        if($_SESSION['role'] == 'admin') {
            echo "<script>alert('Outlet berhasil diupdate');location.href='read.php';</script>";
        }
        if($_SESSION['role'] == 'kasir') {
            echo "<script>alert('Outlet berhasil diupdate');location.href='read.php';</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='form-update.php';</script>";
    }
    


?>