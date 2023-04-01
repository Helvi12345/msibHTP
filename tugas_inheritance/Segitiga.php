<?php
require_once 'Abstract1.php';
abstract class Segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;
    public function __construct()
    {
        $this->alas;
        $this->tinggi;
    }
    public function namaBidang(){
        echo "Segitiga";
    }
    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
}
