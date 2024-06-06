<?php

include("koneksi.php");

$nama_lengkap= $_POST['nama_lengkap'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$alamat= $_POST['alamat'];
$status= $_POST['status'];


// query untuk insert data ke tabel

$insert = mysqli_query($conn, "INSERT INTO anggota (nama_lengkap, jenis_kelamin, alamat, status) VALUES('$nama_lengkap','$jenis_kelamin','$alamat','$status')");

if($insert){
    echo "Data Anggota berhasil di Input <br>";
    echo '<a href="anggota.php">Lihat Data Anggota</a>';
}else{
    echo "Data Anggota GAGAL di Input";
}