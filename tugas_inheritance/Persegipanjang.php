<?php
require_once 'Abstract1.php';
abstract class Persegipanjang extends Bentuk2D{
public $panjang;
public $lebar;
public function __construct($panjang, $lebar)
{
    $this->panjang;
    $this->lebar;
}
public function namaBidang(){
    echo "Persegi Panjang";
}
public function luasBidang(){
    $luas = $this->panjang * $this->lebar;
    return $luas;
}
public function kelilingBidang(){
    $keliling = 2 * $this->panjang + $this->lebar;
    return $keliling;
}
}
