<?php

$meyveler = ["Elma","Armut"];
array_unshift($meyveler, "Portakal","Mandalina");
echo "<pre>";
print_r($meyveler);
echo "</pre>";

array_unshift($meyveler);
echo "<pre>";
print_r($meyveler);
echo "</pre>";

array_push($meyveler,"Karpuz");
echo "<pre>";
print_r($meyveler);
echo "</pre>";


array_pop($meyveler);
echo "<pre>";
print_r($meyveler);
echo "</pre>";

unset($meyveler[1]);
echo "<pre>";
print_r($meyveler);
echo "</pre>";
/**
 * array_unshift()=> Dizinin başlangıcına veri ekler.
 * array_shift()=> Dizinin başlangıcındaki veriyi siler.
 * array_push()=> Dizinin sonuna veri ekler.
 * array_pop()=> Dizinin sonundaki veriyi siler.
 * unset() => Dizide belirtilen indisli değerini kaldırır.

 */
?>