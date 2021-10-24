<?php
#Kullanıcı Giriş Kontrolü


$kullaniciAdi = "Berkcan";
$sifre = "12345";

if ($kullaniciAdi != "Berkcan" OR $sifre != "12345") {
    echo "Kullanıcı bilgilerinizi yanlış girdiniz! Lütfen bilgilerinizi kontrol ediniz";

}
else{
    echo "Giriş başarılı";
}
?>