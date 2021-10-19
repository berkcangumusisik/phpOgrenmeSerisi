<?php
# break durdurma işlemi yapar

for($a = 1; $a <= 10; $a++){
    
    echo $a."<br>";
    if ($a=="5") {
        break;
    }
}

echo "--------------------------------------------"."<br>";

# continue => o deyimin atlanmasını sağlar.
for($b = 1; $b <= 10; $b++){
    
    echo $b."<br>";
    if ($b=="5") {
        continue;
    }
}

?>