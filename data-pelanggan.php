<?php

include "session.php";
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/data-pelanggan.css?v=<?= time()?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Data Pelanggan</h1>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>ID Laundry</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                </tr>
                    <?php
                    $no=1;
                    $query=mysqli_query($db, 'SELECT * FROM pelanggan');
                    while($data = mysqli_fetch_array($query)):
                        ?>
                        <tr>
                            <td><?= $data['id_laundry'] ?></td>
                            <td><?= $data['id_pelanggan']?></td>
                            <td><?= $data['nama_pelanggan'] ?></td>
                            <td><?= $data['no_telp'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                        </tr>
                <?php
                    endwhile;
                ?>
            </table>
        </div>
        <div class="col">
            <a href=""></a>
        </div>
    </div>
</body>
</html>