<?php
    session_start();

    include '../connect.php';
    include '../header.php';

    $query = "SELECT * FROM user";
    $result = mysqli_query($connect ,$query);
    $num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <a class="btn btn-success" href="form-create.php" role="button">Tambah</a>
<table class="table table-dark">
  <thead>
      <h2 align="center">User Profile (DO NOT SHARE)</h2>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>
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
                    echo "<td>". $data['nama']. "</td>";
                    echo "<td>". $data['username']. "</td>";
                    echo "<td>". $data['password']. "</td>";
                    echo "<td>". $data['role']. "</td>";
                    echo "<td><a href='form-update.php?id=". $data['id'] . "'>Edit</a> | "."</td>";
                    echo "<td><a href='delete.php?id=". $data['id'] . "'onclick='return confirm(\"Apakah anda yakin ingin menghapus data?\")'>Hapus</a> | "."</td>";
                    echo "</tr>";
                    $no++;      
                }
            }
            else 
            {
                echo "<td colspan = '3'>Tambahkan user, dong!</td>";
            }
        ?>
</table>
</body>
</html>