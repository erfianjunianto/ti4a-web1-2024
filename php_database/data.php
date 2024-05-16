<?php
include("koneksi.php");

#get data

$query = "SELECT * FROM user order by id ASC";

$data = mysqli_query($conn, $query);
?>
<table border="1">
    <tr>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Alamat</th>
    </tr>
<?php
while ($list = $data->fetch_object() ) {
    ?>
    <tr>
        <td><?=$list->nama;?></td>
        <td><?=$list->jenis_kelamin;?></td>
        <td><?=$list->hobi;?></td>
        <td><?=$list->kota."-".$list->alamat;?></td>
    </tr>
    

    <?php
}
?>
</table>