<?php
$a = 0;
$b = "Berkcan";
var_dump($a == $b);
echo "<br>";

var_dump($a != $b);
echo "<br>";
$c = 35;
$d = "35";
var_dump($c == $d);
echo "<br>";

var_dump($c === $d);
echo "<br>";
var_dump($c !== $d);
echo "<br>";

$e = 35;
$f = 10;
$g = 23;
$h = 10;
var_dump($e < $f);
echo "<br>";
var_dump($e > $f);
echo "<br>";
var_dump($e >= $f);
echo "<br>";
var_dump($f > $h);
echo "<br>";
var_dump($f >= $h);
echo "<br>";
var_dump($f <= $h);
echo "<br>";
/**
 * == eşittir
 * != eşit değildir
 * <> eşit değildir
 * === aynıdır(değer ve türün aynı olması gerekir.)
 * !== farklıdır
 * < küçüktür
 * <= küçük eşitir
 * > büyüktür
 * >= büyük eşittir
 * 
 * var_dump() => karşılaştırma sonucunu true ya da false döner.
 */
?>