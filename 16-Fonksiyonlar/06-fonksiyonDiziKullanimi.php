<?php

function ornek($deger){
    foreach($deger as $yazdir){
        echo $yazdir."<br>";
    }
}
ornek([1,2,3,4]);

function ornek2($veri){
    $sayi = 0;
    foreach($veri as $al){
        $sayi += $al;

    }
    return array($sayi,"Berkcan","Gümüşışık");
}
$dizi = [1,2,3,4];
$veri = ornek2($dizi);
echo "<pre>";
print_r($veri);
echo "</pre>";
?>