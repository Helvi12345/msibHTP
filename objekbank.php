<?php
require 'bank.php';
//ciptakan objek
$n1 = new Bank('001', 'Siti', '3000000');
$n2 = new Bank('002', 'Helvi', '4000000');
$n3 = new Bank('003', 'Hilda', '5000000');
$n4 = new Bank('004', 'Heli', '7000000');
$n5 = new Bank('005', 'Heni', '9000000');

$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();
$n5->cetak();

$dataNasabah = array($n1,$n2,$n3,$n4,$n5);
foreach ($dataNasabah as $data){
    $data->cetak();
}
