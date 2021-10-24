<?php
// Direkt Özyinelemeli Fonksiyon
function islem(){
    $sayi = rand(0,10);
    if($sayi == 5){
        echo "Sayı 5'tir";
    }
    else{
        islem();
    }
}
islem();

//Endirekt Özyinelemeli Fonksiyon
echo "<br>";
function birinci($deger = 1){
    echo $deger."<br>";
    ikinci($deger);
    return;
}
function ikinci($gelen){
    $gelen ++;
    if($gelen <= 10){
        birinci($gelen);
    }
    return;
}
birinci();
/*
 * Özyineli fonksiyon içinde yine kendisi bulunmasıdır
 1. Direkt Özyinelemeli Fonksiyon
 * Fonksiyon içinde fonksiyon kullanarak belirlenen koşul sağlanana kadar çalışır.
 2. Endirekt Özyinelemeli Fonksiyon
 * İki fonksiyon birbiriyle etkileşimdedir. 1. Fonksiyondaki değer 2. fonksiyona değer gönderilir ve değer 1 artar.
 */
?>