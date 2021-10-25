<?php
function uret(){
    static $sayi = 1;
    echo $sayi."<br>";
    $sayi++;
}
uret();
uret();
uret();

/**
 * Fonksiyonlarda static kullanarak fonksiyonu birden fazla çalışması durumunda değeri hafızada tutup yeni değer üretir.
 */
?>