<?php

$meyve = ["Elma","Armut","Karpuz"];
$yazMeyvesi = ["Kavun"];
$yeni = array_merge($meyve,$yazMeyvesi);

echo "<pre>";
print_r($yeni);
echo "</pre>";

//array_merge() => Dizi birleştirmeyi sağlar.
?>