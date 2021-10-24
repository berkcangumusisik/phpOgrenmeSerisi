<?php
$iller = array("Ankara","İzmir","Yozgat", "Kırıkkale","İstanbul");
foreach($iller as $il){
    echo $il."<br>";
}
echo "--------------------------------------------"."<br>";

$Bilgiler["Adı Soyadı"] = "Berkcan Gümüşışık";
$Bilgiler["Notu"] = 95;
$Bilgiler["İli"] = "Ankara";

foreach ($Bilgiler as $anahtar => $deger) {
    echo $anahtar. " : ". $deger."<br>";
}
/**
 * Foreach döngüsü
 * Genellikle array işlemlerinde kullanılır.
 * Sayaca veya koşual ihtiyaç duymaz.
 * foreach(dizi as eleman){
 *  // yapılacak işlem
 * }
 */

?>