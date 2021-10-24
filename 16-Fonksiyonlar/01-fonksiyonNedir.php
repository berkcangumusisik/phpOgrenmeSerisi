<?php

function merhabaYaz(){
    echo "Merhaba";
}
merhabaYaz();
echo "<br>";
function rakamlar(){
    for ($i=1; $i < 10 ; $i++) { 
        echo $i."<br>";
    }
}
rakamlar();
/*
 Fonksiyon nedir?
 * Uzun ve tekrarlayan kod bloklarını derlemek için kullanılır.
 * function anahtar kelimesi kullanılır.
 Fonksiyonun Avantajları
 * Modüler yapı oluşur.
 * Kodların okunaklı ve anlaşılır olmasını sağlar.
 * Bir kez tanımlandıktan sonra tekrar çağırmayı sağlar.
 * Hata Tespitini önler.
 Fonksiyon yapısı
 function fonksiyonAdi(){
     //Kodlar
 }
 fonksiyonAdi(); => fonksiyonu çalıştırır.

 */
?>