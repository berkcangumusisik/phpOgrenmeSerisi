<?php
    $isim = "Berkcan";
    $soyIsim = "Gümüşışık";
    echo $isim . " " . $soyIsim;

    echo "<br>".$isim." Merhaba";
    echo "<br>"."Merhaba ".$isim;

    echo "<br>"."isim:$isim";
    
    $takim = "Türkiye";
    $Takim = "Turkey";

    echo "<br>".$takim;
    echo "<br>".$Takim;

    $sehir = "Ankara";
    $$sehir = "Başkent";
    echo "<br>".$sehir;
    echo "<br>".$Ankara;
    /*
    * Değişkenler
    *  PHP'de değişkenler dolar işaretini($) takip eden bir değişken adı ile gösterilir.
    
    DEĞİŞKEN TANIMLAMA KURALLARI
    * Harf, sayı ya da _ ile oluşur.
    * Değişken adında boşluk olamaz. $adi soyadi
    * Programa özel isimler değişken adı olarak kullanılamaz. Mesela if, else $if
    * Değişken adı büyük-küçük harf duyarlıdır $adi != $Adi
    * Türkçe karakter içeremez. $ağ
    * Tüm veri tiplerini tutabilir. 
    * Harf ve alt çizgi ile başlar. Rakamla başlayamaz.
    * Atama operatörü(=) ile değer ataması yapılır.
    . ile değişkenler birbirine bağlanır.
    */
?>