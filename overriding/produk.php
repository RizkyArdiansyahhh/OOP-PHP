<?php 


class Produk{   // ini adalah class
    // Membuat property
    public  
            $nama,
            $penulis,
            $penerbit,
            $harga,
            $jmlJam,
            $jmlHalaman;


    // Constructor
    public function __construct($nama="Nama", $penulis="Penulis", $penerbit="Penerbit", $harga=0, $jmlJam = 0, $jmlHalaman = 0){
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

    public function getInfoProduk(){
        // game : Naruto | Rizky, Riski Corp, (Rp. 30000) ~ 50 jam
        // Komik : Naruto | Rizky, Riski Corp, (Rp. 30000) - 100 Halaman
        $str = "{$this->nama} | {$this->getLabel()}, (Rp. {$this->harga})";
        return $str;
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->jenis} | {$produk->getLabel()} , {$produk->penerbit} , (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public function getInfoProduk(){
        $str = "komik : {$this->nama} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->nama} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlJam} Jam";
    return $str;
    }
}


$produk1 = new Game("Naruto","Rizky","Riski Corp", 30000, 50, 0); 

$produk2 = new Komik("Naruto", "Riski", "Riski Corp", 40000, 0, 100);


// $infoProduk = new CetakInfoProduk();
// echo $infoProduk->cetak($produk1);

// game : Naruto | Rizky, Riski Corp, (Rp. 30000) ~ 50 jam
echo $produk1->getInfoProduk();
echo "<br>";

// Komik : Naruto | Rizky, Riski Corp, (Rp. 30000) - 100 Halaman
echo $produk2->getInfoProduk();




?>