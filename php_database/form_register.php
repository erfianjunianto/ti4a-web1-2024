<form action="register.php" method="post">
    <label for="">Nama Anggota</label>
    <input type="text" name="nama_lengkap" id="" value="" placeholder="isi nama lengkap anggota">
    <br>

    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" value="laki" checked>Laki - Laki
    <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
    <br>

    <label for="">Alamat</label><br>
    <textarea name="alamat" icols="30" rows="10"></textarea>
    <br>

    <label for="">Status Keanggotaan</label>
    <select name="status">
        <option value="aktif">Aktif</option>
        <option value="non aktif">Non Aktif</option>
    </select>
    <br>

    <button type="submit">Proses</button>
</form>