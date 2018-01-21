<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 上午12:47
 */
function writeName($fname)
{
    echo $fname . " Refsnes.<br>";
}

echo "My name is ";
writeName("Kai Jim");
echo "My sister's name is ";
writeName("Hege");
echo "My brother's name is ";
writeName("Stale");

echo "\n";
function add($x,$y)
{
    $total=$x+$y;
    return $total;
}

echo "1 + 16 = " . add(1,16);
