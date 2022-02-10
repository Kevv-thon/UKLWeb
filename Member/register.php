<?php   
    session_start();
    include '../connect.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telp = $_POST['telp'];

    if ($nama == "" || $alamat == "" || $telp == "") {
        if($_SESSION['role'] == 'admin') {
            echo "<script>alert('Ada yang salah nih, coba lagi');location.href='../Login/home-admin.php';</script>";          
        } elseif($_SESSION['role']=='kasir') {
            echo "<script>alert('Ada yang salah nih, coba lagi');location.href='../Login/home-kasir.php';</script>";
            
        }
    } else {
        $query = "INSERT INTO member (nama, alamat, jenis_kelamin, telp) 
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$telp')";

        $result = mysqli_query($connect, $query);

        $num = mysqli_affected_rows($connect);

        if($num > 0) {
            if($_SESSION['role'] == 'admin') {
                echo "<script>alert('Member berhasil dibuat');location.href='../login/home-admin.php';</script>";
            }
            if($_SESSION['role'] == 'kasir') {
                echo "<script>alert('Member berhasil dibuat');location.href='../Login/home-kasir.php';</script>";
            }
            
            
        } else {
            echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='form-register.php';</script>";
        }
    }
    
?>
<?PHP 

?>