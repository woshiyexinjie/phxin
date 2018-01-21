
<html>
<body>

<?php
$i=1;
while($i<=5)
{
    echo "The number is " . $i . "<br>";
    $i++;
}


$i=1;
do
{
    $i++;
    echo "The number is " . $i . "<br>";
}
while ($i<=5);


for ($i=1; $i<=5; $i++)
{
    echo "The number is " . $i . "<br>";
}

$x=array("one","two","three");
foreach ($x as $value)
{
    echo $value . "<br>";
}
?>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 上午12:44
 */

/*
 * 在 PHP 中，提供了下列循环语句：

while - 只要指定的条件成立，则循环执行代码块
do...while - 首先执行一次代码块，然后在指定的条件成立时重复这个循环
for - 循环执行代码块指定的次数
foreach - 根据数组中每个元素来循环代码块
 */
?>