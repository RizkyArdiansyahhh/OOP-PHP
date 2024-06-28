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
        return "$this->jenis, $this->nama, $this->penulis";
    }

}


$produk1 = new Produk("game","Naruto","Rizky","Riski Corp", 30000); 

var_dump($produk1);
echo $produk1->getLabel();
echo "<br>";

$produk2 = new Produk("Film", "Naruto", "Riski", "Riski Corp", 40000);

var_dump($produk2);
echo $produk2->getLabel();


?>