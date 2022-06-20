<?php
include 'koneksi.php';

$id_laundry=$_POST['id_laundry'];
$id_pelanggan=$_POST['id_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];

$set = mysqli_query($db, "INSERT INTO pelanggan VALUES('$id_laundry', '$id_pelanggan', '$nama_pelanggan', '$no_telp', '$alamat')");

if($set) {
    echo "<script> alert('Data Berhasil Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='home.php'>";
}else{
    echo "<script> alert('Data Gagal Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='tambah-pelanggan.php'>";
}

?>