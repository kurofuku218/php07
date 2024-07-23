<?php
$people = array(
    'Taro' => '25歳men',
    'Jiro' => '20歳men',
    'hanako'=> '16歳women'
);

foreach ($people as $person => $old) {
   echo $person.'(' .$old .')';
   echo "<br />";
}
?>