<?php

$sayi = 35;
if($sayi > 50){
    echo "Sayı değişkeni 50'den büyüktür";
}
else if($sayi > 20){
    echo "Sayı değişkeni 20'den büyüktür";    
}

echo "<br>";
$il = "Ankara";

if($il == "İzmir"){
    echo "Canım İzmir";
}
else if($il == "Ankara"){
    echo "Canım Başkent";
}
echo "<br>";


$not = 75;
if($not >=0 && $not<=29){
    echo "Harf notu: FF";
}
else if($not >=30 && $not<=59){
    echo "Harf notu: DD";
}
else if($not >=60 && $not<=75){
    echo "Harf notu: CC";
}
else if($not >=76 && $not<=83){
    echo "Harf notu: BB";
}
else if($not >=84 && $not<=91){
    echo "Harf notu: BA";
}
else if($not >=92 && $not<=100){
    echo "Harf notu: AA";
}
/*

    else if(eğer değilse)
    - If kontrol yapısı çalışmazsa yeni koşul yazılır.
    - if kontrol yapısından sonra kullanılır.
    - if(kosul1){
        // koşul 1 sağlanırsa çalışır
      }
      else if(kosul2){
          // kosul 2 sağlanırsa çalışır.
      }

 */
?>