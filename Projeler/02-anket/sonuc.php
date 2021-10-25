<?php
foreach( $_POST as $key => $value ) {
  $$key = $value;
}
$dos=fopen("oy.txt","r");
$oku=fgets($dos,1024);$oku1=fgets($dos,1024);$oku2=fgets($dos,1024);$oku3=fgets($dos,1024);
$x=intval($oku);$y=intval($oku1);$q=intval($oku2);$p=intval($oku3);
fclose($dos);
$top=$x+$y+$p+$q;

$ff1=($x/$top)*100;
$yy1=intval($ff1);
$ff2=($y/$top)*100;
$yy2=intval($ff2);
$ff3=($q/$top)*100;
$yy3=intval($ff3);
$ff4=($p/$top)*100;
$yy4=intval($ff4);

?>
<style>
.co{
font-family:"arial tur";
color:"#FFFFFF";
font-weight:bolder;
font-size:15;
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
<body bgcolor="#3366FF">
<div align="center"><p></p>
  <p><span class="con">SONU&Ccedil;LAR</span></p>
  <table width="136" height="169" border="0" cellpadding="1" cellspacing="1">
    <tr> 
      <td height="31"><span class="co">&nbsp;</span></td>
      <td><div align="center"><span class="co">Oy</span></div></td>
      <td><div align="center"><span class="co">%</span></div></td>
    </tr>
    <tr> 
      <td width="57" height="24"><span class="co">Haber</span></td>
      <td width="30"><div align="center"><span class="co"><?php echo"$x";?></span></div></td>
      <td width="39"><div align="center"><span class="co"><?php printf('%.2f',$ff1);?></span></div></td>
    </tr>
    <tr> 
      <td height="26"><span class="co">Dizi</span></td>
      <td><div align="center"><span class="co"><?php echo"$y";?></span></div></td>
      <td><div align="center"><span class="co"><?php printf('%.2f',$ff2);?></span></div></td>
    </tr>
	    <tr> 
      <td height="26"><span class="co">Spor</span></td>
      <td><div align="center"><span class="co"><?php echo"$q";?></span></div></td>
      <td><div align="center"><span class="co"><?php printf('%.2f',$ff3);?></span></div></td>
    </tr>

    <tr> 
      <td height="26"><span class="co">Tartışma</span></td>
      <td><div align="center"><span class="co"><?php echo"$p";?></span></div></td>
      <td><div align="center"><span class="co"><?php printf('%.2f',$ff4);?></span></div></td>
    </tr>
	   <tr> 

      <td height="27"><span class="co">Toplam</span></td>
      <td><div align="center"><span class="co"><?php echo"$top";?></span></div></td>
      <td><div align="center"></div></td>
    </tr>
  </table>
  <span class="con"><a href="ANKET.htm">Geri</a></span>
  </div>
