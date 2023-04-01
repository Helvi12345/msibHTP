<?php
class Bentuk2D
{
    public $luasBidang;
    public $kelilingBidang;

    public function cetak()
    {
        echo '<br> Luas' . $this->luasBidang();
        echo '<br> Keliling' . $this->kelilingBidang();
    }
}
