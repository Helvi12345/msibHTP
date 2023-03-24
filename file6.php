<?php
$nama = "Helvi";
$nillai = 80;

if ($nillai >= 85 && $nillai <= 100) $grade = "A";
else if ($nillai >= 75 && $nillai <= 84) $grade = "B";
else if ($nillai >= 60 && $nillai <= 74) $grade = "C";
else if ($nillai >= 30 && $nillai <= 59) $grade = "D";
else if ($nillai >= 0 && $nillai <= 29) $grade = "E";
else $grade = "";

switch ($grade) {
    case "A":
        $predikat = "Memuaskan";
        break;
    case "B":
        $predikat = "Bagus";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Buruk";
        break;
}
?>

Nama : <?= $nama ?>
<br> Nilai : <?= $nillai ?>
<br> Grade : <?= $grade ?>
<br> Predikat : <?= $predikat ?>