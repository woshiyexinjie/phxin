<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/21
 * Time: 下午11:28
 */


/**
 * print(): 函数print()打印一个值（它的参数），如果字符串成功显示则返回true，否则返回false。

   print_r(): 可以把字符串和数字简单地打印出来，而数组则以括起来的键和值得列表形式显示，
 * 并以Array开头。但print_r()输出布尔值和NULL的结果没有意义，因为都是打印"\n"。因此用var_dump()函数更适合调试。
 */
print "<h2>nandiexin</h2>";
print "Hello world!<br>";
print "我要学习 PHP!";

$cars=array("Volvo","BMW","Toyota");
print_r($cars);


/*
 * var_dump(): 判断一个变量的类型与长度,并输出变量的数值,如果变量有值输的是变量的值并回返数据类型。
 * 此函数显示关于一个或多个表达式的结构信息，包括表达式的类型与值。数组将递归展开值，通过缩进显示其结构。
 */
var_dump($cars)
?>