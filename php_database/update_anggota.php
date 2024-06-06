<?php

include("koneksi.php");

$id = $_POST['id_anggota'];
$nama_lengkap= $_POST['nama_lengkap'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$alamat= $_POST['alamat'];
$status= $_POST['status'];


// query untuk update data dari tabel

$update = mysqli_query($conn, "UPDATE anggota SET 
            nama_lengkap='$nama_lengkap', 
            jenis_kelamin='$jenis_kelamin',
            alamat='$alamat',
            status='$status'
            WHERE id='$id'");

if($update){
    echo "Ubah data Anggota berhasil <br>";
    echo '<a href="anggota.php">Lihat Data Anggota</a>';
}else{
    echo "Ubah data Anggota GAGAL";
}