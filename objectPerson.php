<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'Staff.php';
$d1 = new Dosen('Budi', 'L', '111', 'M.Kom');
$d2 = new Dosen('Helvi', 'P', '112', 'M.Kom');
$m1 = new Mahasiswa('Hilda', 'P', '6', 'Teknik Informatika');
$m2 = new Mahasiswa('Heli', 'L', '6', 'Teknik Informatika');
$s = new Staff('Cindy', 'P', '0044', 'Staff marketing', 10000000);

$ar_data = [$d1, $d2, $m1, $m2, $s];

foreach ($ar_data as $data) {
    $data->cetak();
}
