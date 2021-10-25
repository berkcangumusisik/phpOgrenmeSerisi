<?php
// Döngülerde genellikle foreach döngüsü kullanılır.

$iller= ["Ankara","İstanbul","İzmir","Malatya"];
foreach($iller as $il){
    echo $il."<br>";
}

echo "-------------------------------------------------"."<br>";

for ($i=0; $i <count($iller) ; $i++) { 
    echo $i." ".$iller[$i]."<br>";
}
?>