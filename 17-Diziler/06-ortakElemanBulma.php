<?php

$sayi1 = [1,5,6,7];
$sayi2 = [1,5,7,9];
$sayi3 = [1,7,0,3];

$sonuc = array_intersect($sayi1,$sayi2,$sayi3);
echo "<pre>";
print_r($sonuc);
echo "</pre>";

// array_intersect() => dizilerin ortak elemanını bulmayı sağlar
?>