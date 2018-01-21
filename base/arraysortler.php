<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 上午12:36
 */

/*
 * sort() - 对数组进行升序排列
rsort() - 对数组进行降序排列
asort() - 根据关联数组的值，对数组进行升序排列
ksort() - 根据关联数组的键，对数组进行升序排列
arsort() - 根据关联数组的值，对数组进行降序排列
krsort() - 根据关联数组的键，对数组进行降序排列

 */


$cars=array("Volvo","BMW","Toyota");
sort($cars);
print_r($cars);


$numbers=array(4,6,2,22,11);
sort($numbers);
print_r($numbers);

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
print_r($age);