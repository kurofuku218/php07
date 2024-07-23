<?php


function triangle($height, $underline, $topline)
{
    $value = $height * ($underline + $topline) / 2  ;
    return $value;
}
    $total = triangle(5, 2, 5);
    echo $total;


?>
