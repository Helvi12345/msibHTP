<?php
require_once 'Lingkaran.php';
require_once 'Persegipanjang.php';
require_once 'Segitiga.php';

$l = new Lingkaran('Lingkaran', '14');
$p = new Persegipanjang ('Persegi panjang', '15', '10');
$s = new Segitiga ('Segitiga', '10', '12');

$ar_data = [$l, $p, $s];

foreach ($ar_data as $data){
    $data->cetak();
}
