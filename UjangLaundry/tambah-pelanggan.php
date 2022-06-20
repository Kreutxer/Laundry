<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tambah-pelanggan.css?v=<?= time()?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="title">
                <h1>Tambah Data</h1>
            </div>
            <div class="form">
                <form action="action-pelanggan.php" method="POST">
                    <table>
                        <tr>
                            <td>ID Laundry</td>
                            <td>:</td>
                            <td>
                                <select name="id_laundry" class="drop">
                                    <option value="empty">Pilih Laundry</option>
                                    <option value="L02">L02</option>
                                    <option value="L04">L04</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>ID Pelanggan</td>
                            <td>:</td>
                            <td><input type="text" name="id_pelanggan" id=""></td>
                        </tr>
                        <tr>
                            <td>Nama </td>
                            <td>:</td>
                            <td><input type="text" name="nama_pelanggan"></td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon </td>
                            <td>:</td>
                            <td><input type="text" name="no_telp"></td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td>:</td>
                            <td><input type="text" name="alamat"></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="simpan">Simpan</td>
                            <td></td>
                            <td><input type="reset" name="batal" value="Batal"></td>
                        </tr>
                        
                    </table>

                    <!-- <div class="simpan-btn">
                        <button type="button" name="simpan">Simpan</button>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>