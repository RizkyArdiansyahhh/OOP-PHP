<?php
class Komik extends Produk implements infoProduk{
    public $jumlahHalaman;

    public function __construct($nama="Nama", $penulis="Penulis", $penerbit="Penerbit", $harga=0, $jumlahHalaman = 0){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function infoProduk(){
        // game : Naruto | Rizky, Riski Corp, (Rp. 30000) ~ 50 jam
        // Komik : Naruto | Rizky, Riski Corp, (Rp. 30000) - 100 Halaman
        $str = "{$this->nama} | {$this->getLabel()}, (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "komik : ". $this->infoProduk()  ." - {$this->jumlahHalaman} Halaman";
    return $str;
    }
}