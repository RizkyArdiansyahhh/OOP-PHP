<?php 


class Produk{   // ini adalah class
    // Membuat property
    public  $jenis, 
            $nama,
            $penulis,
            $penerbit,
            $harga,
            $jmlJam,
            $jmlHalaman;


    // Constructor
    public function __construct($jenis="Jenis", $nama="Nama", $penulis="Penulis", $penerbit="Penerbit", $harga=0, $jmlJam = 0, $jmlHalaman = 0){
        $this->jenis = $jenis;
        $this->nama=$nama;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
        $this->jmlJam =$jmlJam;
        $this->jmlHalaman = $jmlHalaman;
    }

    // Memuat Method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // game : Naruto | Rizky, Riski Corp, (Rp. 30000) ~ 50 jam
        // Komik : Naruto | Rizky, Riski Corp, (Rp. 30000) - 100 Halaman
        $str = "{$this->jenis} : {$this->nama} | {$this->getLabel()}, (Rp. {$this->harga})";
        if($this->jenis == "komik"){
            $str.= " - {$this->jmlHalaman} Halaman";
        }else if($this->jenis == "game"){
            $str .= " ~ {$this->jmlJam} Jam";
        }
        return $str;
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->jenis} | {$produk->getLabel()} , {$produk->penerbit} , (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("game","Naruto","Rizky","Riski Corp", 30000, 50, 0); 

$produk2 = new Produk("komik", "Naruto", "Riski", "Riski Corp", 40000, 0, 100);


// $infoProduk = new CetakInfoProduk();
// echo $infoProduk->cetak($produk1);

// game : Naruto | Rizky, Riski Corp, (Rp. 30000) ~ 50 jam
echo $produk1->getInfoLengkap();
echo "<br>";

// Komik : Naruto | Rizky, Riski Corp, (Rp. 30000) - 100 Halaman
echo $produk2->getInfoLengkap();




?>