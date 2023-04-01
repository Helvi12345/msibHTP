<?php
require_once 'Abstract1.php';
abstract class Lingkaran extends Bentuk2D
{
    public $jari2;
    public function __construct($jari2)
    {
        $this->jari2;
    }
    public function namaBidang()
    {
        echo "Lingkaran";
    }
    public function luasBidang()
    {
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }
}
