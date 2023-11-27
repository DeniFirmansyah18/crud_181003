<?php
//koneksi
include 'koneksi.php';

//menangkap data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//update data ke db
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");

//kembali ke index.php
header("location:index.php");
?>