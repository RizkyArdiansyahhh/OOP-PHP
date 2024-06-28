<?php 


class Produk{   // ini adalah class
    // Membuat property
    public   $jenis ="Jenis", 
            $nama = "Nama",
            $penulis = "Penulis",
            $penerbit = "Penerbit",
            $harga = "Harga";


    // Memuat Method
    public function getLabel(){
        return "$this->jenis, $this->nama, $this->penulis";
    }

}


$produk1 = new Produk(); //Ini adalah 
$produk1->jenis = "Game";
$produk1->nama = "Naruto";
$produk1->penulis = "Rizky";
$produk1->penerbit = "Riski Corp";
$produk1->harga = 30000;
var_dump($produk1);
echo $produk1->getLabel();
echo "<br>";

$produk2 = new Produk();
$produk2->jenis="Film";
$produk2->nama="Naruto";
$produk2->penulis="Riski";
$produk2->penerbit="Riski Corp";
$produk2->harga=40000;
var_dump($produk2);
echo $produk2->getLabel();


?>