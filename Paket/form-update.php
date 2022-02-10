<?php
    
    include '../connect.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM paket WHERE id = '$id'";

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
        <label for="jenis">Jenis paket:</label>
        <select class="form-control" id="jenis" placeholder="Pilih jenis paket" name="jenis" value="<?php echo $row['jenis']; ?>">
        <option>kiloan</option>
        <option>selimut</option>
        <option>bed_cover</option>
        <option>kaos</option>
        </select>
        </div>
        <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="number" class="form-control" id="harga" placeholder="Masukkan harga" name="harga" value="<?php echo $row['harga']; ?>">
        </div>
        <input type="hidden" name="id" value=<?=$id?>>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>