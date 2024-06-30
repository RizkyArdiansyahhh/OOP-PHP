<?php

abstract class buah{
    private $nama;

    abstract public function makan();

    public function setNama($nama){
        $this->nama = $nama;
    }
}

class apel extends buah{
    public function makan(){
        return "kupass....gigit";
    }
}

class durian extends buah{
    public function makan(){
        return "dibukak....makan";
    }
}

class leci extends buah{
    public function hello(){
        return "hello buah";
    }
}



$apel = new apel();
echo $apel->makan();
echo "<hr>";

$durian = new durian();
echo $durian->makan();
echo "<hr>";

$leci = new leci();
echo $leci->hello;

?>