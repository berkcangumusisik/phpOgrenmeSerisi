<?php
$notu = 4;
switch ($notu) {
    case 0:
        echo "Başarısız";
        break;
    case 1:
        echo "Zayıf";
        break;
    case 2:
        echo "Geçer";
        break;
    case 3:
        echo "Orta";
        break;
    case 4:
        echo "İyi";
        break;
    case 5:
        echo "Pek iyi";
        break;
    
    default:
        echo "Girilen değer 0 ile 5 arasında olmalıdır";
        break;
}
/* 
Switch Case yapısı
- Switch deyimi, verilen bir değişken değerinin sıralanan koşullardan hangisine uygun olduğunu kontrol eder ve o bölümün çalışmasını sağlar
switch(degisken){
    case "deger1":
        //Deger 1 çalışma alanı
        break;
    case "deger2":
        //Deger2 çalışma alanı
        break;
    default:
        //Tüm şartlar dışında kalır.
        break;
}
*/

?>