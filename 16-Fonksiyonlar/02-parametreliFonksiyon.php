<?php

function topla($sayi1,$sayi2,$sayi3){
    echo $sayi1."<br>";
    echo $sayi2."<br>";
    echo $sayi3."<br>";
    echo $sayi1+$sayi2+$sayi3;
}

topla(3,4,5);

echo "<br>";

function bilgiler($isim, $il = "Türkiye"){
    echo "İsim: ".$isim."<br>";
    echo "İl: ".$il."<br>";
}
bilgiler("Berkcan");
bilgiler("Berkcan","Ankara");


function carp($deger1,$deger2){
    $sonuc = $deger1*$deger2;
    return $sonuc;

}
$hesapla = carp(10,20);
echo "İşlemin sonucu:".$hesapla;
?>