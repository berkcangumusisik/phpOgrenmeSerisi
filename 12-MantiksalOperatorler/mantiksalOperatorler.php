<?php
$a = true && true;
echo $a."<br>";
$a = true && false;
echo $a."<br>";
$a = false && false;
echo $a."<br>";
$a = false and false;
echo $a."<br>";
$a = false || false;
echo $a."<br>";
$a = true || true;
echo $a."<br>";
$a = (false or true);
echo $a."<br>";
$a = false or true;
echo $a."<br>";
/**
 *
 * && : ve => $a && $b => $a ve $b doğruysa sonuç true
 * || : veya => $a || $b => $a veya $b doğruysa sonuç true
 * ! : değil => !$a => $a yanlışsa sonuç doğrudur.
 * And : ve => $a and $b => $a ve $b doğruysa sonuç true
 * Or : veya => $a or $b => $a veya $b doğruysa sonuç true
 */
?>