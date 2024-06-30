<?php 

interface infoProduk{
    public function getInfoProduk();
}


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

class CetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk){
        $this->daftarProduk[] = $produk;
    }
    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
        $str.= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

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

class Game extends Produk implements infoProduk{
    public $jumlahJam;

    public function __construct($nama="Nama", $penulis="Penulis", $penerbit="Penerbit", $harga=0, $jumlahJam = 0){
        parent::__construct($nama, $penulis, $penerbit, $harga);
        $this->jumlahJam = $jumlahJam;
    }
    public function infoProduk(){
        // game : Naruto | Rizky, Riski Corp, (Rp. 30000) ~ 50 jam
        // Komik : Naruto | Rizky, Riski Corp, (Rp. 30000) - 100 Halaman
        $str = "{$this->nama} | {$this->getLabel()}, (Rp. {$this->harga})";
        return $str;
    }
    public function getInfoProduk(){
        $str = "Game : ". $this->infoProduk() ." - {$this->jumlahJam} Jam";
    return $str;
    }
}


$produk1 = new Game("Naruto","Rizky","Riski Corp", 30000, 50); 

$produk2 = new Komik("Naruto", "Riski", "Riski Corp", 40000, 100);

$cetakInfoProduk = new CetakInfoProduk();
$cetakInfoProduk->tambahProduk($produk1);
$cetakInfoProduk->tambahProduk($produk2);

echo $cetakInfoProduk->cetak();





?>