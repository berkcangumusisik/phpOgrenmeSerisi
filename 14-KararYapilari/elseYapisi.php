<?php 

$mevsim = "Kış";
if($mevsim == "İlkbahar"){
  echo "Mevsim ilkbahardır.";

}
else if ($mevsim == "Yaz"){
  echo"Mevsim yazdır";
}
else if ($mevsim == "Sonbahar"){
  echo"Mevsim sonbahardır";
}
else if ($mevsim == "Kış"){
  echo"Mevsim kıştır";
}
else{
  echo "Yanlış değer girişi yaptınız";
}

echo "<br>";
$sayi = 0;
if($sayi > 5):
  echo "Sayı 5'ten büyüktür";
elseif($sayi == 0):
  echo "Sayı 0'dır";
else:
  echo "Sayı 5'ten küçük ve 0 değildir";
endif;

echo "<br>";
$sayi = 35;
echo($sayi > 10) ? "Sayı 10'dan büyük":"Sayı 10'dan küçük";

/*
    Else(değilse yapısı)
    - Kontrol yapısında şartlar hiçbir koşula uymuyorsa çalışır.
      if(kosul1){
        // koşul 1 sağlanırsa çalışır
      }
      else if(kosul2){
          // kosul 2 sağlanırsa çalışır.
      }
      else{
          //hiçbir koşul sağlanmaz.
      }

      Ternary(Üçlü operatör)
      ifade(koşul)?(doğruysa):(yalnışsa);
*/

?>