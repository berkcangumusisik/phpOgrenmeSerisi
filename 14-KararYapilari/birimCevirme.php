<?php

/**
 * 100'lük sistemi 5 lik sisteme çevirme
 * 0 - 25 => 0 
 * 25 - 45 => 1
 * 45 - 55 => 2
 * 55 - 70 => 3
 * 70- 85 => 4
 * 85 -100 => 5

 */
$not = 64;
if($not >= 0 AND $not < 25){
    echo 0;
}
elseif($not >= 25 AND $not < 45){
    echo 1;
}
elseif($not >= 45 AND $not < 55){
    echo 2;
}
elseif($not >= 55 AND $not < 70){
    echo 3;
}
elseif($not >= 70 AND $not < 85){
    echo 4;
}
elseif($not >= 85 AND $not <= 100){
    echo 5;
}
else{
    echo "Yanlış değer girdiniz.";
}
?>