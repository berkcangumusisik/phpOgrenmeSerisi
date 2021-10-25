<?
include "sabit.php";
$ok=$HTTP_COOKIE_VARS[$cad];
if(!$ok):
?>
<html>
<head>
<title>Anket</title>
<meta http-equiv="content-language" content="tr">
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<META http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta Name="generator" content="PHPEd 2.3.3">
<style type="text/css">

input.a { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-style: normal; font-weight: normal; color: #00FFFF; text-decoration: none; background-color: #00152B; cursor: crosshair ; border-style: none}

</style>
</HEAD>
<body bgcolor="#FFFFFF"text="#000000">
<table width="200" border="1" bordercolor="#000033" cellspacing="0" cellpadding="0" align="center">
<tr>
<td collspan="2" align="center" valign="top" bgcolor="#000033"> 
<div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color=white><?echo"$ad";?></font></div></td>
</tr>
<tr><td>
<form name="anket" method="post" action="goster.php"><br>
<table width="85%" border="0" cellspacing="2" cellpadding="0" align="center">
<?
for($i=0;$i<$kac;$i++) 
{
?>
 <tr>
  <td width="9%" collspan=2><input type="radio" name="a" value="<?echo $i;?>"></td>
  <td width="91%" collspan=2><font face=verdana size=1 color="#000033"><? echo $u[$i+1];?></font></td>
 </tr>
<?
}
?>
</table>
<center>
<input type="submit" name="gonder" value="Oyla!" sonclick="pencere=window.open('','pencere','width=220,height=250'); target='pencere'; this.form.submit();" class="a">
</center>
</form>
</td>
</tr>
</table>
</body>
</html>
<?
   else :
      include"goster.php";
   endif ;
?>