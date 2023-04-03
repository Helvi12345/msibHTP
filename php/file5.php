<?php
$nama = "Helvi";
$totalBelanja = 300000;
$keterangan = "";

if ($totalBelanja > 100000) {
    $keterangan = "Selamat $nama Anda dapat hadiah";
} else {
    $keterangan = "Terimakasih sudah berbelanja";
}
?>

Nama Pelanggan : <?= $nama ?>
<br> Total Belanja : <?= $totalBelanja ?>
<br> Keterangan : <?= $keterangan ?>