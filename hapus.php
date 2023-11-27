<?php
//koneksi db
include 'koneksi.php';

//menangkap data dari url
$id = $_GET['id'];

//menghapus data dari db
mysqli_query($koneksi,"delete from mahasiswa where id='$id'");

//kembali ke index.php
header("location:index.php");

?>