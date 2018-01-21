<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 上午12:15
 */

/*
 * 在 PHP 中，只有一个字符串运算符。

并置运算符 (.) 用于把两个字符串值连接起来。
 */
$txt1="Hello world!";
$txt2="What a nice day!";
echo $txt1 . " " . $txt2;

echo "\n";
/*
 * 有时知道字符串值的长度是很有用的。

strlen() 函数返回字符串的长度（字符数）。*/


echo strlen("hello xin");

echo "\n";
echo strpos("Hello world!","world");

echo "\n";
$str = "Hello";
echo md5($str);

echo "\n";
echo substr("Hello world",6);

?>