<form method="GET">
    <label>Nama</label><br>
    <input type="text" name="nama"><br>
    <label>Alamat</label><br>
    <textarea name="Alamat"></textarea><br>
    <input type="submit" name="proses" value="simpan"><br>
</form>
<?php
error_reporting(0);

//memproses form
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$proses = $_GET['proses'];
?>