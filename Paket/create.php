<?php
    session_start();
    include '../connect.php';

    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    if ($jenis == "" || $harga == "") {
        if($_SESSION['role'] == 'admin') {
            echo "<script>alert('Ada yang salah nih, coba lagi');location.href='../Login/home-admin.php';</script>";          
        } elseif($_SESSION['role']=='kasir') {
            echo "<script>alert('Ada yang salah nih, coba lagi');location.href='../Login/home-kasir.php';</script>";
            
        }
    } else {
        $query = "INSERT INTO paket (jenis, harga) 
            VALUES ('$jenis', '$harga')";

        $result = mysqli_query($connect, $query);

        $num = mysqli_affected_rows($connect);

        if($num > 0) {
            if($_SESSION['role'] == 'admin') {
                echo "<script>alert('Paket berhasil ditambahkan');location.href='read.php';</script>";
            }
            if($_SESSION['role'] == 'kasir') {
                echo "<script>alert('Paket berhasil ditambahkan');location.href='read.php';</script>";
            }

        } else {
            echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='form-create.php';</script>";
        }
    }

?>