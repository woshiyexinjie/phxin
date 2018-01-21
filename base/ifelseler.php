<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 上午12:28
 */

$t=date("H");
if ($t<"20")
{
    echo "Have a good day!";
}
echo "\n";

$t=date("H");
if ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
echo "\n";

$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
elseif ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
echo "\n";