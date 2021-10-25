<?php
foreach( $_POST as $key => $value ) {
  $$key = $value;
}
$dos=fopen("oy.txt","r");
$oku=fgets($dos,1024);
$oku1=fgets($dos,1024);
$oku2=fgets($dos,1024);
$oku3=fgets($dos,1024);

$x=intval($oku);
$y=intval($oku1);
$q=intval($oku2);
$p=intval($oku3);
fclose($dos);
if($sec==1){$x++;}elseif($sec==2){$y++;}elseif($sec==3){$q++;}elseif($sec==4){$p++;}
$dos=fopen("oy.txt","w");
fputs($dos,"$x\n$y\n$q\n$p\n");
fclose($dos);
$metin="<br>Oyunuz Alındı!</br>";
?>
<style>
.co{
font-family:"arial tur";
color:"#FFFFFF";
font-weight:bolder;
font-size:16;
}
</style>
<style>
.con{
text-decoration: underline;
font-family:"arial tur";
color:"#FFFFFF";
font-weight:bolder;
font-size:17;
}
</style>
<body bgcolor="#3366FF" ><div align="center">
  <p>&nbsp;</p>
  <p><span class="co">Oyunuz Başarıyla Alındı</span></p>
  <p><span class="con"><a href="sonuc.php">Sonuçlar</a></span></p>
  </div>
