<?php

include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data users</title>
</head>
<body>
    <h1>Data users</h1>
    <a href ="create.php">tambah user </a>

    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>alamat</th>
            <th>opsi</th>
        </tr>
        
        <?php
            $data = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id DESC");
            while($user = mysqli_fetch_array($data)){

            
        ?>

        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['nama'] ?></td>
            <td><?php echo $user['alamat'] ?></td>
            <td><a href="delete.php?id=<?php echo $user['id'] ?>">delete</a></td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>