<?php
$isim = "Berkcan";
$soyisim = "Gümüşışık";

echo $isim." - " . $soyisim;
unset($isim,$soyisim);
echo $isim." - " . $soyisim;

/**
 * Değişken öldürme
 * Büyük projelerde RAM tasarrufu sağlar
 * unset() ile kullanılır.
 */
?>