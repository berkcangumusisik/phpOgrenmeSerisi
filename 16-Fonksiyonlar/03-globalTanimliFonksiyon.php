<?php
$isim = "Berkcan";
function bilgiler(){
    global $isim;
    echo $isim;
}
bilgiler();

echo "<br>";

$a = 2;
$b = 3;
function carp(){
    echo $GLOBALS["a"] * $GLOBALS["b"];
}
carp();
?>