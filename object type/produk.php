<?php 


class Produk{   // ini adalah class
    // Membuat property
    public  $jenis, 
            $nama,
            $penulis,
            $penerbit,
            $harga ;


    // Constructor
    public function __construct($jenis="Jenis", $nama="Nama", $penulis="Penulis", $penerbit="Penerbit", $harga=0){
        $this->jenis = $jenis;
        $this->nama=$nama;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }

    // Memuat Method
    public function getLabel(){
        return "$this->nama, $this->penulis";
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->jenis} | {$produk->getLabel()} , {$produk->penerbit} , (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("game","Naruto","Rizky","Riski Corp", 30000); 

$produk2 = new Produk("Film", "Naruto", "Riski", "Riski Corp", 40000);


$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1);



?>