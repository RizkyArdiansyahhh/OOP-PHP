<?php
abstract class Produk{   // ini adalah class
    // Membuat property
    protected  $nama,
            $penulis,
            $penerbit,
            $diskon = 0,
            $harga;


    // Constructor
    public function __construct($nama="Nama", $penulis="Penulis", $penerbit="Penerbit", $harga=0){
        $this->nama=$nama;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }

    // Memuat Method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    
    abstract public function infoProduk();


    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setPenulis($penulis){
        $this->penulis = $pennulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
}