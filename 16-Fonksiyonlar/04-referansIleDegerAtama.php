<?php

function toplam(&$sayi){
    $sayi += 35;

}

$degisken = 10;
toplam($degisken);
echo $degisken;
?>