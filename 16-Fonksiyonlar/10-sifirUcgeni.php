<?php
function ucgen($num1){
  $zero="0";
  for($a=1; $a<=$num1; $a++) {
    for($b=1; $b<=$a; $b++) {
      print $zero;
    }
    print "<br>";
  }
}
ucgen(15)
?>