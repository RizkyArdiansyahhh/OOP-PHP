<?php
namespace App\Produk;

class Game extends Produk implements infoProduk{
    public $jumlahJam;

    public function __construct($nama="Nama", $penulis="Penulis", $penerbit="Penerbit", $harga=0, $jumlahJam = 0){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jumlahJam = $jumlahJam;
    }
    public function infoProduk(){
        // game : Naruto | Rizky, Riski Corp, (Rp. 30000) ~ 50 jam
        // Komik : Naruto | Rizky, Riski Corp, (Rp. 30000) - 100 Halaman
        $str = "{$this->nama} | {$this->getLabel()}, (Rp. {$this->harga})";
        return $str;
    }
    public function getInfoProduk(){
        $str = "Game : ". $this->infoProduk() ." - {$this->jumlahJam} Jam";
    return $str;
    }
}