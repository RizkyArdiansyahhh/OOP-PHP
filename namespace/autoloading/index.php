<?php

require_once 'App/init.php';


$produk1 = new App\produk\Game("Naruto","Rizky","Riski Corp", 30000, 50); 

$produk2 = new App\produk\Komik("Naruto", "Riski", "Riski Corp", 40000, 100);

$cetakInfoProduk = new App\produk\CetakInfoProduk();
$cetakInfoProduk->tambahProduk($produk1);
$cetakInfoProduk->tambahProduk($produk2);

echo $cetakInfoProduk->cetak();

// Membuat Alias pada namespace
use App\produk\User as produkUser;
use App\service\User as serviceUser;

new produkUser();
echo "<br>";
new serviceUser();