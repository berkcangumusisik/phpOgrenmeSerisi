<?php

# Hata Bastırma Operatörü => @

echo @$deneme;

$a = 13;
$b = 0;
$sonuc = @($a / $b);
echo $sonuc;
?>