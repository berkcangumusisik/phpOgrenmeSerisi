<?php

for($say = 1; $say <=5; $say++){
    echo $say."<br>";
}

echo "--------------------------------------------"."<br>";

for($a= 0 ; $a <= 10;  $a += 2){
    echo $a."<br>";
}


echo "--------------------------------------------"."<br>";


for($i=1; $i<= 10; $i++){
    for($j= 1; $j <=10;$j++){
        echo "*";
    }
    echo "<br>";
}


echo "--------------------------------------------"."<br>";


for($b =1; $b <= 10; $b++){
    if($b == 1){
        echo "Adana"."<br>";
    }
    elseif($b == 2){
        echo "Afyon"."<br>";
    }
    elseif($b == 3){
        echo "Afyon"."<br>";
    }
    else {
        echo $b."<br>";
    }
}

echo "--------------------------------------------"."<br>";
for($c =1; $c <= 10; $c++){
    echo "2.".$c." = ".($c*2)."<br>";
}



/**
 * For Döngüsü
 * Tekrar sayısı bellidir.
 * En işlevsel döngü türüdür.
 * for(baslangıc;dongu kosulu, işlem miktari){}
 */
?>