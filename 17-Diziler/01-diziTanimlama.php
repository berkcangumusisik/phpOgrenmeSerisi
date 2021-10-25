<?php
$iller= ["Ankara","İstanbul","İzmir","Malatya"];
echo $iller[0]."<br>";
echo $iller[1]."<br>";
echo $iller[2]."<br>";
echo $iller[3]."<br>";
echo "-----------------------------------------------------------------"."<br>";
$isimler = [];
$isimler[0] = "Berkcan";
$isimler[1] = "Şevval";
$isimler[2] = "Nurana";
$isimler[3] = "Mete";

echo"<pre>";
print_r($isimler);
echo "</pre>";


$uyeBilgileri = [
    "Ad Soyad" => "Berkcan Gümüşışık",
    "Şehir" => "Ankara",
    "Puan" => "12345",
    "Rol" => "Öğrenci"
];
echo"<pre>";
print_r($uyeBilgileri);
echo "</pre>";
echo $uyeBilgileri["Ad Soyad"];

/*
 * Birden fazla değer saklayabilen çoklu verileri daha verimli kullanmaya olanak sağlayan sıralı değişkenlerdir.
 Dizilerin Genel Özellikleri
 * Diziler array() ya da [] içine tanımlanır.
 * Dizinin boyutu birden fazla olabilir.
 * Dizide yer alan her bir elemanın indisi vardır. Dizinin indisi string olarak da atanabilir.
 * İndislere değer atamadıkça 0'dan başlar
 * Dizi elemanlarına [] indis girilerek ulaşılır.
 * 
 */

?>