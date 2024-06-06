<?php
include("koneksi.php");

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM anggota WHERE id='$id'");

while ($data = $query->fetch_object()) {
    $id_anggota = $data->id;
    $nama_lengkap = $data->nama_lengkap;
    $jenis_kelamin = $data->jenis_kelamin;
    $alamat = $data->alamat;
    $status = $data->status;
}
?>
<form action="update_anggota.php" method="post">
    <input type="hidden" name="id_anggota" value="<?=$id_anggota;?>">
    <label for="">Nama Anggota</label>
    <input type="text" name="nama_lengkap" id="" value="<?=$nama_lengkap;?>" placeholder="isi nama lengkap anggota">
    <br>

    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" value="laki" <?=$jenis_kelamin=='laki'?'checked':''?>>Laki - Laki
    <input type="radio" name="jenis_kelamin" value="perempuan" <?=$jenis_kelamin=='perempuan'?'checked':''?>>Perempuan
    <br>

    <label for="">Alamat</label><br>
    <textarea name="alamat" icols="30" rows="10"><?=$alamat;?></textarea>
    <br>

    <label for="">Status Keanggotaan</label>
    <select name="status">
        <option value="aktif" <?=$status=='aktif'?'selected':''?>>Aktif</option>
        <option value="non aktif" <?=$status=='non aktif'?'selected':''?>>Non Aktif</option>
    </select>
    <br>

    <button type="submit">Proses</button>
</form>