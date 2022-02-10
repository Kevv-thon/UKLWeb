<?php
    
    include '../connect.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM outlet WHERE id = '$id'";

    $result = mysqli_query($connect, $query);
    // $result = mysqli_result($res);
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit</title>
</head>
<body>
    <div class="container">
    <h2 align="center">Edit outlet</h2>
    <form action="update.php" method="post">
        <div class="form-group">
        <label for="nama_outlet">Nama Outlet:</label>
        <input type="text" class="form-control" id="nama_outlet" placeholder="Masukkan nama outlet" name="nama_outlet" value ="<?php echo $row['nama_outlet']; ?>">
        </div>
        <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" value ="<?php echo $row['alamat']; ?>">
        </div>
        <div class="form-group">
        <label for="owner">Owner:</label>
        <input type="text" class="form-control" id="owner" placeholder="Masukkan nama owner" name="owner" value ="<?php echo $row['owner']; ?>">
        </div>
        <input type="hidden" name="id" value=<?=$id?>>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>