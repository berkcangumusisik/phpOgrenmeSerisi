<?php

//Dizi farkı bulma array_diff();
$sayi1 = [1,4,5,6,5,5,5,5];
$sayi2 = [1,0,6];
$sayi3 = [0,6,9];

$fark = array_diff($sayi1,$sayi2,$sayi3);
echo "<pre>";
print_r($fark);
echo "</pre>";

//Dizideki tekrarlayan değeri silme array_unique();
$duzenle = array_unique($sayi1);
echo "<pre>";
print_r($duzenle);
echo "</pre>";

//Dizi elemanlarını tek seferde çıktı alma implode();

echo implode(" ",$sayi1);
echo "<br>";

//array_rand() =>Diziden rasgele eleman almayı sağlar

$sozler =[
    "Bugün çok güzelsin",
    "Sadece sen ol",
    "Harikasın"
];
$rasgele = array_rand($sozler);
echo $sozler[$rasgele];

//array_reverse() => Dizide tersine sıralama yapmayı sağlar.
$isim = ["Berkcan","Şevval","Nurana","Mete"];
$tersCevir = array_reverse($isim);
echo "<pre>";
print_r($tersCevir);
echo "</pre>";


//count() - sizeof() => eleman sayısını verir.

echo count($isim)."<br>";
echo sizeof($isim)."<br>";


//array_product() => Dizi elemanlarını çarpar.
// array_sum() => dizi elemanlarını toplar.

echo array_product($sayi2)."<br>";
echo array_sum($sayi2)."<br>";


//array_search() => Dizide belirtilen değeri arar ve bulursa ilgili anahtarı döndürür.
$kontrol = array_search("Berkcan",$isim);
if($kontrol == TRUE){
    echo $kontrol."<br>";
}

//in_array() => Dizide bir değerin varlığını arar.
$kontrol2 = in_array("Berkcan",$isim);
if($kontrol2 == TRUE){
    echo "Aradığını buldun"."<br>";
}
else{
    echo "Maalesef yok";
}
//array_key_exists() => Belirtilen anahtar ya da indis dizide var mı?
$kontrol3 = array_key_exists("Berkcan",$isim);
if($kontrol3 == TRUE){
    echo "Aradığını buldun"."<br>";
}
else{
    echo "Maalesef yok";
}

//array_keys() => Dizide belirtilen değeri arar ve bulursa ilgili anahtarı döndürür.
$kontrol4 = array_keys($sayi1,3);
echo "<pre>";
print_r ($kontrol4);
echo "</pre>";


//range() => Belli aralıklarla dizi oluşturur.
$olustur = range(0,100,10);
echo "<pre>";
print_r ($olustur);
echo "</pre>";


//array_chunk() => Diziyi belli aralıklarla böler
$bol = array_chunk($isim,2);
echo "<pre>";
print_r ($bol);
echo "</pre>";


//array_replace() => Dizi birleştirme ve güncelleme yapar.
$bilgiler1 = [
    "Bilgisayar",
    "Telefon",
    "Ankara",
    "türkiye"
];
$bilgiler2 = [
    "PC",
    "Cep",
    "Başkent",
    "Türkiye",
    "Berkcan"
];

$islem = array_replace($bilgiler1,$bilgiler2);

echo "<pre>";
print_r ($islem);
echo "</pre>";

//array_flip() => indis ile değerin yerini değiştirme
$degistir = array_flip($isim);

echo "<pre>";
print_r ($degistir);
echo "</pre>";

//array_map() => Dizi elemanlarını fonksiyona gönderme
function islem($deger){
    return "Adı: ".$deger;
}
$degistir2 = array_map("islem",$isim);

echo "<pre>";
print_r ($degistir2);
echo "</pre>";

?>