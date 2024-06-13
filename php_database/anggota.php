<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tampilan.css">
    <title>Document</title>
    <!-- <style>
        h4 {
            color:#50E0EE;
            font-size:26px;
            text-align:left;
            font-family: 'Comic Sans Ms';
        }
        h2{
            color:#0023FF;
        }

        table, th, td{
            border: 1px solid #0023FF;
            font-family: "Arial Black";
        }
    </style> -->
</head>
<body>
    <?php

    include ("koneksi.php");

    $query = mysqli_query($conn, "SELECT * FROM anggota ORDER BY id ASC");

    ?>
    <h2>Halaman</h2>
    <h4>Daftar Anggota Perpustakaan</h4>

    <a href="form_register.php">Tambah Anggota Baru</a> <br><br><br>
    <table>
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
</body>
</html>