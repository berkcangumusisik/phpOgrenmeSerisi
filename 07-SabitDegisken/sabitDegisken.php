<?php

define("ADSOYAD","Berkcan Gümüşışık");
echo ADSOYAD;
echo "<br>";
define("TAKİM","Fenerbahçe");
echo TAKİM;

define("ILLER",["Ankara","İzmir","İstanbul"]);
echo "<br>".ILLER[0]."<br>".ILLER[1]."<br>".ILLER[2]."<br>";


define("BILGILER",
    array(
        "adı" => "Berkcan",
        "soyadı" => "Gümüşışık",
        "il" => "Ankara",
        "ilgisi" => array(
            "Kitap Okumak",
            "Kod yazmak"
        )
    )
);
echo "<pre>";

print_r(BILGILER);

/*
Sabit değişkenler
* Değeri asla değiştirilemez.
* Bir kez tanımlanır ve değeri atanır

SABİT DEĞİŞKEN TANIMLAMA KURALLARI
* define() fonksiyonu ile tanımlanır.
* Büyük küçük harf duyarlıdır.
* Boşluk kullanılmaz.
* 1. parametre => sabitDegiskenAdi , 2.=> deger
* $ işaretine gerek yoktur.
* Türkçe karakter kullanılmaz.
* Tüm değişken tanımlama kuralları geçerlidir.

*/
?>