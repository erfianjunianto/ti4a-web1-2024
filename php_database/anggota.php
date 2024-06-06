<?php

include ("koneksi.php");

$query = mysqli_query($conn, "SELECT * FROM anggota ORDER BY id ASC");

?>

<h4>Daftar Anggota Perpustakaan</h4>
<a href="form_register.php">Tambah Anggota Baru</a> <br><br><br>
<table border="1" cellpadding="1">
    <tr>
        <th>No</th>
        <th>Nama Anggota</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    while($data = $query->fetch_object()){
        ?>
            <tr>
                <td><?=$no;?></td>
                <td><?=$data->nama_lengkap;?></td>
                <td><?=$data->jenis_kelamin;?></td>
                <td><?=$data->alamat;?></td>
                <td><?=$data->status;?></td>
                <td>
                    <a href="form_edit_anggota.php?id=<?=$data->id;?>">Edit</a> |
                    <a href="hapus_anggota.php?id=<?=$data->id;?>">Hapus</a>
                </td>
            </tr>

        <?php
        $no++;
    }

    ?>
</table>