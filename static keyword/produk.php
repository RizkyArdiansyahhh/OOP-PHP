<?php 


class Produk{   // ini adalah class
    // Membuat property
    private  $nama,
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

    public function getInfoProduk(){
        // game : Naruto | Rizky, Riski Corp, (Rp. 30000) ~ 50 jam
        // Komik : Naruto | Rizky, Riski Corp, (Rp. 30000) - 100 Halaman
        $str = "{$this->nama} | {$this->getLabel()}, (Rp. {$this->harga})";
        return $str;
    }
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

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->jenis} | {$produk->getLabel()} , {$produk->penerbit} , (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public $jumlahHalaman;

    public function __construct($nama="Nama", $penulis="Penulis", $penerbit="Penerbit", $harga=0, $jumlahHalaman = 0){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk(){
        $str = "komik : ". parent::getInfoProduk()  ." - {$this->jumlahHalaman} Halaman";
    return $str;
    }
}

class Game extends Produk{
    public $jumlahJam;

    public function __construct($nama="Nama", $penulis="Penulis", $penerbit="Penerbit", $harga=0, $jumlahJam = 0){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jumlahJam = $jumlahJam;
    }
    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." - {$this->jumlahJam} Jam";
    return $str;
    }
}


$produk1 = new Game("Naruto","Rizky","Riski Corp", 30000, 50); 

$produk2 = new Komik("Naruto", "Riski", "Riski Corp", 40000, 100);


// $infoProduk = new CetakInfoProduk();
// echo $infoProduk->cetak($produk1);

// game : Naruto | Rizky, Riski Corp, (Rp. 30000) ~ 50 jam
echo $produk1->getInfoProduk();
echo "<br>";

// Komik : Naruto | Rizky, Riski Corp, (Rp. 30000) - 100 Halaman
echo $produk2->getInfoProduk();
echo "<br>";

echo $produk1->getHarga();
$produk1->setDiskon(50);
echo "<br>";
echo $produk1->getHarga();

echo "<hr>";
echo "<hr>";


echo $produk1->getNama();
echo $produk1->getPenulis();
echo $produk1->getPenerbit();
echo $produk1->getDiskon();
echo $produk1->getHarga();




?>