<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 下午2:27
 */

/*如需过滤变量，请使用下面的过滤器函数之一：

filter_var() - 通过一个指定的过滤器来过滤单一的变量
filter_var_array() - 通过相同的或不同的过滤器来过滤多个变量
filter_input - 获取一个输入变量，并对它进行过滤
filter_input_array - 获取多个输入变量，并通过相同的或不同的过滤器对它们进行过滤*/

$int = 123;

if(!filter_var($int, FILTER_VALIDATE_INT))
{
    echo("不是一个合法的整数");
}
else
{
    echo("是个合法的整数");
}

/*有两种过滤器：

Validating 过滤器：

用于验证用户输入
严格的格式规则（比如 URL 或 E-Mail 验证）
如果成功则返回预期的类型，如果失败则返回 FALSE
Sanitizing 过滤器：

用于允许或禁止字符串中指定的字符
无数据格式规则
始终返回字符串*/

/*if(!filter_has_var(INPUT_GET, "email"))
{
    echo("没有 email 参数");
}
else
{
    if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL))
    {
        echo "不是一个合法的 E-Mail";
    }
    else
    {
        echo "是一个合法的 E-Mail";
    }
}*/

/*通过使用 FILTER_CALLBACK 过滤器，可以调用自定义的函数，把它作为一个过滤器来使用。这样，我们就拥有了数据过滤的完全控制权。

您可以创建自己的自定义函数，也可以使用已存在的 PHP 函数。

将您准备用到的过滤器的函数，按指定选项的规定方法进行规定。在关联数组中，带有名称 "options"。

在下面的实例中，我们使用了一个自定义的函数把所有 "_" 转换为 "."：*/

function convertSpace($string)
{
    return str_replace("_", ".", $string);
}

$string = "www_runoob_com!";

echo filter_var($string, FILTER_CALLBACK,
    array("options"=>"convertSpace"));