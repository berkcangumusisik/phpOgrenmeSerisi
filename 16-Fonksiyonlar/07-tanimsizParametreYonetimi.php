<?php
function ornek1(){
    $parametre = func_num_args();
    echo $parametre;
}
ornek1();
echo "<br>";
ornek1("Berkcan","İbrahim","Hüseyin");
echo "<br>";

function parametreBilgisi(){
    $parametre = func_num_args();
    if($parametre == 0){
        echo "Parametre gönderilmemiştir";
    }
    if($parametre==1){
        echo func_get_arg(0); 
    }
}
parametreBilgisi();
echo "<br>";

parametreBilgisi("Berkcan");
/**
 * func_get_arg => fonksiyona gönderilen argüman/argümanlardan belirlenen indis değeri döner.
 * func_get_args => Fonksiyona gönderilen argümanları dizi olarak döndürür.
 * func_num_args => Fonksiyona gönderilen argüman sayısını verir.
 * 
 */
?>