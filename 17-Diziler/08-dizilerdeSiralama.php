<?php
/*
  * Anahtar ilişkisi bozulmadan sıralama
  asort() => diziyi küçükten büyüğe sıralar.
  arsort() => diziyi büyükten küçüğe sıralar
*/

$iller = [
    "Ankara" => "06",
    "İzmir"  => "35",
    "İstanbul" => "34",
    "Kırıkkale" => "71"
];
asort($iller);
echo "<pre>";
print_r($iller);
echo "</pre>";


arsort($iller);
echo "<pre>";
print_r($iller);
echo "</pre>";


/*
  * Anahtar ilişkisi korunmadan sıralama
  sort() => Anahtar ilişkisi korunmadan diziyi küçükten büyüğe sıralar.
  rsort() =>  Anahtar ilişkisi korunmadan diziyi büyükten küçüğe sıralar
  shuffle() => Anahtar ilişkisi korunmadan rasgele sıralar
*/

sort($iller);
echo "<pre>";
print_r($iller);
echo "</pre>";

rsort($iller);
echo "<pre>";
print_r($iller);
echo "</pre>";

shuffle($iller);
echo "<pre>";
print_r($iller);
echo "</pre>";

/*
  * Doğal sıralama
  natcasesort() => Harf büyüklüğüne duyarlı sıralama
  natsort() =>  doğal sıralama
*/

$hayvan = [
    "Kertenkele",
    "kaplumbağa",
    "kurbağa",
    "kanguru"
];

natcasesort($hayvan);
echo "<pre>";
print_r($hayvan);
echo "</pre>";

natsort($hayvan);
echo "<pre>";
print_r($hayvan);
echo "</pre>";

/*
  * Anahtarına göre sıralama
  ksort() => Anahtarına göre diziyi küçükten büyüğe sıralar.
  krsort() => Anahtarına göre diziyi büyükten küçüğe sıralar
*/
ksort($iller);
echo "<pre>";
print_r($iller);
echo "</pre>";


krsort($iller);
echo "<pre>";
print_r($iller);
echo "</pre>";


function f($sayi)
{
    $sayi2 = 2;
    $total = 1;
    for ($i = 1; $i <= $sayi; $sayi--) {
        $total *= $sayi;
    }
    return $total;
}

echo f(3) * f(2);
?>