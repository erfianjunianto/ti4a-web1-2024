<?php
/*
Materi IF
// if sederhana
if(kondisi){
    statement true;
}else{
    statement false;
}


// if sederhana
if(kondisi 1){
    statement 1;
}else
if(kondisi 2){
    statement 2;
}else
if(kondisi 3){
    statement 3;
}else{
    statement false;
}



Username:
Password:

// if sederhana
if(apakah username ada di DB?){
    if(apakah password ada di DB){
        kasih akses;
    }
}


if(apakah username ada di database AND password juga ada di database){
    kasih akses;
}else{
    tolak akses;
}

*/


echo "Nama Lengkap: ". $_POST['nama_lengkap']."<br>";
echo "Jenis Kelamin: ".($_POST['j_kelamin']='l'?'Laki-Laki':'Perempuan')."<br>";
if($_POST['kota']=='1'){
    echo "Kota Asal: Kota Bandung";
}else
if($_POST['kota']=='2'){
    echo "Kota Asal: Kab. Bandung";
}else
if($_POST['kota']=='3'){
    echo "Kota Asal: Kab. Bandung Barat";
}else
if($_POST['kota']=='4'){
    echo "Kota Asal: Kota Cimahi";
}else
{
    echo "Kota Asal: tidak ditemukan";
}
echo "<br>";
echo "Alamat Domisili: ".$_POST['alamat']."<br>";

echo "<a href='register.php'>Kembali</a>";
?>