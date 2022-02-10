<?php
    session_start();

    include '../connect.php';
    include '../header.php';

    $query = "SELECT * FROM paket";
    $result = mysqli_query($connect ,$query);
    $num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket</title>
</head>
<body>
    <a class="btn btn-success" href="form-create.php" role="button">Tambah</a>
<table class="table table-dark">
  <thead>
      <h2 align="center">Paket Details</h2>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Jenis</th>
      <th scope="col">Harga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
            

            if($num > 0) 
            {
                $no = 1;
                while($data = mysqli_fetch_assoc($result)) 
                {
                    echo "<tr>";
                    echo "<th>". $no. "</th>";
                    echo "<td>". $data['jenis']. "</td>";
                    echo "<td>". $data['harga']. "</td>";
                    echo "<td><a href='form-update.php?id=". $data['id'] . "'>Edit</a> | "."</td>";
                    echo "<td><a href='delete.php?id=". $data['id'] . "'onclick='return confirm(\"Apakah anda yakin ingin menghapus data?\")'>Hapus</a> | "."</td>";
                    echo "</tr>";
                    $no++;      
                }
            }
            
            else 
            {
                echo "<td colspan = '3'>Data paket gaada...*sad noises*</td>";
            }
        ?>
</table>
</body>
</html>