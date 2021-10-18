<?php
$a = 10;
$a++; 
echo "a'nın değeri: ".$a."<br>";
$a--;
echo "a'nın değeri: ".$a."<br>";

$b = 5;
$c = 2 + --$b;
echo "b'nin değeri: ".$b."<br>";

$d = 10;
$e = 5 + ++$d;
$f = ++$e;
echo "e'nin değeri: ".$e."<br>";
echo "f'nin değeri: ".$f."<br>";

$sayi1 = 10;
$sayi2 = 5 + $sayi1++;
echo "Sayı 2'nin değeri: ".$sayi2."<br>";
echo "Sayı 1'in değeri: ".$sayi1."<br>";


/** 
 * $a++ => $a işleme konur, sonra değeri 1 artırılır.
 * ++$a => $a değeri 1 artırılır, sonra $a işleme konur
 * $a-- => $a işleme konur, sonra değeri 1 azaltılır.
 * --$a => $a değeri 1 azaltılır, sonra $a işleme konur
*/

?>