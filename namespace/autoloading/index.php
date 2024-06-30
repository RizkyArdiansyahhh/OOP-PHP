<?php

require_once 'App/init.php';


$produk1 = new Game("Naruto","Rizky","Riski Corp", 30000, 50); 

$produk2 = new Komik("Naruto", "Riski", "Riski Corp", 40000, 100);

$cetakInfoProduk = new CetakInfoProduk();
$cetakInfoProduk->tambahProduk($produk1);
$cetakInfoProduk->tambahProduk($produk2);

echo $cetakInfoProduk->cetak();