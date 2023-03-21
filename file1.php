<?php
echo 'Hello world';

//ini pemanggilan di PHP

//belajar php
$namaSiswa = "Helvi";
$umur = 25;
$berat_badan = 40;
$_pekerjaan = "Pengajar";
$tes = "coba";

echo '<hr>';
echo 'Nama siswa :' . $namaSiswa;
echo '<br> Umur :' . $umur;
echo '<br> Berat Badan : ' . $berat_badan;
echo '<br> Pekerjaan : ' . $_pekerjaan;
?>

<hr>
Nama siswa : <?= $namaSiswa ?>
<br> Umur : <?= $umur ?>
<br> Berat badan : <?= $berat_badan ?>
<br> Pekerjaan : <?= $_pekerjaan ?>