<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="color:red;"> Berkcan Gümüşışık</h1>
<h1 style="color:red;"> Web Siteme Hoş Geldiniz</h1>
<img src="https://www.biltektasarim.com/biltek3/dosyalar/blog_manset/web_sitesi_nasil_yapiliyor.jpg">
<br/>
<?php
$veri = "sayac.txt";
$baglanti = fopen("$veri","r");
$sayi = fread($baglanti,10);
$yeniSayi = $sayi + 1;
echo "<font face =\"verdana\" size=\"5\" color = \"black\">";
echo "Web Sitemiz ";
echo "</font><font face =\"verdana\" size=\"5\" color = \"red\">";
echo $yeniSayi;
echo "<font face =\"verdana\" size=\"5\" color = \"black\">";
echo " Kez Ziyaret Edilmiştir"."</font>";
$yaz = fopen("$veri","w");
fputs($yaz,"$yeniSayi");
fclose($yaz);
fclose($baglanti);

?>

    
</body>
</html>
