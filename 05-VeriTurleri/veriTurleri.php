<?php 

$degisken = 35;
echo gettype($degisken);


$veri = "35";
echo "<br>".gettype($veri);

$sayi = (double)06;
echo "<br>".$sayi." - ".gettype($sayi);


$sayi2 = 3.5555;
$sayi3 = (int)$sayi2;
echo "<br>".$sayi3." - ".gettype($sayi3);

$veri2 = "Benim uğurlu sayım 6'dır.";
$veri3 = (int)"6 benim uğurlu sayımdır.";
settype($veri2,"int");
echo "<br>".$veri2." - ".gettype($veri2);
echo "<br>".$veri3." - ".gettype($veri3);

/* 
1. String
- Metinsel ifadeleri içerir.
- $isim = "Berkcan";

2. Integer(int)
- Tam sayıları ifade eder.
- 2,147,483,648(-2 milyar 147 milyon 483 bin 648) ile 2,147,483,647 arasında değer alır.

3. float
- Ondalıklı sayıları ifade eder.
- 10.35 , 22.5, 14.0, -94,5

4. double
- floata göre daha hassas 
- 5.1234567890

5. boolean
- true/ false değerini ifade eder

6. object
- Nesneleri ifade eder.
- $degisken -> isim = "Berkcan";

7. array
- Dizileri ifade eder.
- $degisken = array("Berkcan","Gümüşışık","Ankara");

8. null
- değeri olmadığını ifade eder.

gettype() => değişkenin veri türünü verir.

*** Bir string ifade sayısal değerle başlıyorsa onu int yapmak istersek sayıyı yazar.
* settype()=> değişkenin veri türünü değiştirir. 
*/


?>