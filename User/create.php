<?php
    session_start();
    include '../connect.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];
    

    if ($nama == "" || $username == "" || $password == "") {
        if($_SESSION['role'] == 'admin') {
            echo "<script>alert('Ada yang salah nih, coba lagi');location.href='../Login/home-admin.php';</script>";          
        } elseif($_SESSION['role']=='kasir') {
            echo "<script>alert('Ada yang salah nih, coba lagi');location.href='../Login/home-kasir.php';</script>";
            
        }
    } else {
        $query = "INSERT INTO user (nama, username, password, role) 
            VALUES ('$nama', '$username', '$password', '$role')";

        $result = mysqli_query($connect, $query);

        $num = mysqli_affected_rows($connect);

        if($num > 0) {
            if($_SESSION['role'] == 'admin') {
                echo "<script>alert('User berhasil ditambahkan');location.href='read.php';</script>";
            }
            if($_SESSION['role'] == 'kasir') {
                echo "<script>alert('User berhasil ditambahkan');location.href='read.php';</script>";
            }

        } else {
            echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='form-create.php';</script>";
        }
    }

?>