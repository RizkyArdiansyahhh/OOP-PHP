<?php

// CONSTANT DAPAT DIBUAT DENGAN KEYWORD
// DEFINE("NAME", "VALUE")
// CONST = VALUE


define("NAMA", "Rizky ardiansyah"); //tidak bisa di dalam class karna bersifat global

echo NAMA;
echo ("<hr>");

const NAMA2 = "Rizky Ardiansyah"; //dapat didalam class
echo NAMA2;
echo ("<hr>");

class coba{
    const COBACONST = "Hello word";
}
echo coba::COBACONST;
echo ("<hr>");



// di php ada banyak magic constant
echo __LINE__;
echo __FILE__;
echo __NAMESPACE__;
echo __DIR__;

?>