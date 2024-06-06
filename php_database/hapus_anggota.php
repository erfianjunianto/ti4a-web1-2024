<?php

include("koneksi.php");

$id = $_GET['id'];
// query untuk hapus data dari  tabel

$hapus = mysqli_query($conn, "DELETE FROM anggota WHERE id='$id'");

if($hapus){
    echo "Data Anggota berhasil di hapus <br>";
    echo '<a href="anggota.php">Lihat Data Anggota</a>';
}else{
    echo "Data Anggota GAGAL di hapus";
}