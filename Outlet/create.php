<?php
    session_start();
    include '../connect.php';

    $nama_outlet = $_POST['nama_outlet'];
    $alamat = $_POST['alamat'];
    $owner = $_POST['owner'];

    if ($nama_outlet == "" || $alamat == "" || $owner == "") {
        if($_SESSION['role'] == 'admin') {
            echo "<script>alert('Ada yang salah nih, coba lagi');location.href='../Login/home-admin.php';</script>";          
        } elseif($_SESSION['role']=='kasir') {
            echo "<script>alert('Ada yang salah nih, coba lagi');location.href='../Login/home-kasir.php';</script>";
            
        }
    } else {
        $query = "INSERT INTO outlet (nama_outlet, alamat, owner) 
            VALUES ('$nama_outlet', '$alamat', '$owner')";

        $result = mysqli_query($connect, $query);

        $num = mysqli_affected_rows($connect);

        if($num > 0) {
            if($_SESSION['role'] == 'admin') {
                echo "<script>alert('Outlet berhasil ditambahkan');location.href='read.php';</script>";
            }
            if($_SESSION['role'] == 'kasir') {
                echo "<script>alert('Outlet berhasil ditambahkan');location.href='read.php';</script>";
            }

        } else {
            echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='form-create.php';</script>";
        }
    }

?>