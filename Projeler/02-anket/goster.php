<?
  include "sabit.php";
  $ok=$HTTP_COOKIE_VARS[$cad];
  $yes="<Center><font face=Verdana Size=1 color=#000033>Yan�t�n�z Ankete ��lenmi�tir...</font></Center><br>";
         if($gonder&&!$ok):
            if(!file_exists("anket.txt")):
                setcookie($cad, "1", time()+$ekle);
                $dosya=fopen("anket.txt", "w");
                       for($i=0; $i<$kac; $i++):
                           if($i==$a):
                              $an[$i]=1;
                              echo $yes;
                           else :
                              $an[$i]=0;
                           endif ;
                           fputs($dosya, $an[$i].";");
                       endfor ;
                fclose($dosya);
            else :
                setcookie($cad, "1", time()+$ekle);
                $dosya=@fopen("anket.txt", "r") or die("<Center>Dosya Bulunamadı</Center>");;
                $oku=fgetcsv($dosya, 1024, ";");
                $oku[$a]++;
                echo $yes;
                fclose($dosya);
                $dosya=fopen("anket.txt", "w");
                       for($i=0; $i<$kac; $i++):
                           fputs($dosya, "$oku[$i];");
                       endfor ;
                fclose($dosya);
            endif ;
         endif ;
  $toplam=0;
  $dosya=@fopen("anket.txt", "r") or die("<Center>Dosya Bulunamadı</Center>");;
  $oku=fgetcsv($dosya, 1024, ";");
       for($i=0; $i<$kac; $i++):
           $toplam=$toplam+$oku[$i];
       endfor ;
  fclose($dosya);
?>
<Title>Anket</Title>
<table width="200" border=1 bordercolor="#000033" cellspacing=0 cellpading=0  align="center">
<tr><td bgcolor="#000033" collspan="2"><font face="verdana" size="1" color=white><center><? echo "$ad";?><br></b>(Toplam <? echo "<b>$toplam</b>"?> kez oyland�)<center></font></td></tr>
<tr><td><table width="170"border="0"align="center" cellspacing=0 cellpading=0><br>
<?
  for($i=0;$i<$kac;$i++):
      $y=round(($oku[$i]*100)/$toplam);
?>
<tr>
<td width="77%" align=left><font face="Verdana" size="1" color="#000033"><? echo $u[$i+1];?></font></td>
<td width="23%" align=right><font face=verdana size=1 color="#000033"><? echo "%$y";?></font></td>
</tr>
<tr>
<td colspan="2" align=left><img src="blue.gif" width="<?echo $y?>%" height="10"></td>
</tr>
<?
  endfor ;
?>
</table>
<br>
</td></tr>
</table>