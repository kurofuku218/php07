<?php
$i = 0;
while ($i <= 25) {
    if($i % 5 == 0){
        $i++;
        echo "<br />";
        continue;
    }
    $i++;
    echo "*";
}
?>