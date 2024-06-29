<?php

class cobaStatic{
    public static $angka = 0;

    public static function contoh(){
        return "hello " . self::$angka++ . " kali.";
    }
    public function contoh2(){
        return "hello";
    }
}

echo cobaStatic::$angka;
echo "<br>";

echo cobaStatic::contoh();
echo "<br>";
echo cobaStatic::contoh();
echo "<br>";
echo cobaStatic::contoh();
echo "<br>";
echo cobaStatic::contoh();
echo "<br>";


$cth = new cobaStatic();
echo $cth->contoh2();

?>