<?php
/*
Bir AVM'ye ateş ölçer programı yazmalısınız.
ateşinin derecesine göre AVM'ye 
girip-giremeyeceğini kullanıcıya belirtin. 
Program sonunda şöyle bir çıktı elde etmelisiniz:
"Ateşiniz 39 derece. AVM'ye Giremezsiniz!"
*/

$ates = 37;
echo  ($ates >= 37.5) ? ("Ateşiniz ".$ates." derece. AVM'ye giremezsiniz") : ("Ateşiniz ".$ates." derece. AVM'ye girebilirsiniz. Maske , mesafe ve temizliğe dikkat ediniz.");

?>