<?php
    session_start();

    include '../connect.php';

    $id = $_GET['id'];

    $query = "DELETE FROM user WHERE id = $id";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if($num > 0) {
        if($_SESSION['role'] == 'admin') {
            echo "<script>alert('User berhasil dihapus');location.href='read.php';</script>";
        }
        if($_SESSION['role'] == 'kasir') {
            echo "<script>alert('User berhasil dihapus');location.href='read.php';</script>";
        }
        
        
    } else {
        echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='read.php';</script>";
    }
    
?>