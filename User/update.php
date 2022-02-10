<?php
    session_start();
    include '../connect.php';
    $qry_laundry = mysqli_query($connect, "select * from user");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $query = "UPDATE user SET nama = '$nama', username = '$username', password = '$password', role = '$role' WHERE id = $id";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if ($result) {
        if($_SESSION['role'] == 'admin') {
            echo "<script>alert('User berhasil diupdate');location.href='read.php';</script>";
        }
        if($_SESSION['role'] == 'kasir') {
            echo "<script>alert('User berhasil diupdate');location.href='read.php';</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='form-update.php';</script>";
    }
    


?>