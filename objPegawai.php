<?php
require 'Pegawai.PHP';

$manager = new pegawai('12345', 'Helvi', 'Manager', 'Islam', 'Menikah');
$asisten = new pegawai('12346', 'Hilda', 'Asisten Manager', 'Islam', 'Belum Menikah');
$keBag = new pegawai('12347', 'Hafis', 'Kepala Bagian', 'Hindu', 'Menikah');
$staff = new pegawai('12348', 'Heli', 'Staff', 'Islam', 'Menikah');
$staff2 = new pegawai('12349', 'Heni', 'Staff', 'Kristen', 'Menikah');

$ar_pegawai = [$manager, $asisten, $keBag, $staff, $staff2];

foreach ($ar_pegawai as $pegawai){
    $pegawai-> cetak();
}
