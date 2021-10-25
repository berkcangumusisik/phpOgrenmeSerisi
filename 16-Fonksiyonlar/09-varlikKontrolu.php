<?php

function isim(){
    echo "Berkcan";
}
if(function_exists("isim")){
    echo "isim() fonksiyonu bulunmaktadır";

}
else{
    echo "isim() fonksiyonu bulunmamaktadır";
}
/**
 * function_exists() => Fonksiyonun olup olmadığını kontrol eder. Eğer varsa true, yoksa false döner
 */
?>