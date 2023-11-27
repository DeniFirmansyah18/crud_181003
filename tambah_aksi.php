<?php
//koneksi db
include 'koneksi.php';

//menangkap data dikirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//input data ke db
mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim', '$alamat')");

//kembali ke index.php
header("location:index.php");