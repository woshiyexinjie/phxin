<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 下午12:53
 */
//在 PHP 中，默认的错误处理很简单。一条错误消息会被发送到浏览器，这条消息带有文件名、行号以及描述错误的消息。

//$file=fopen("welcome.txt","r");


/*if(!file_exists("welcome.txt"))
{
    die("文件不存在");
}
else
{
    $file=fopen("welcome.txt","r");
}*/

/*
 *
在创建脚本和 Web 应用程序时，错误处理是一个重要的部分。如果您的代码缺少错误检测编码，那么程序看上去很不专业，也为安全风险敞开了大门。

本教程介绍了 PHP 中一些最为重要的错误检测方法。

我们将为您讲解不同的错误处理方法：

简单的 "die()" 语句
自定义错误和错误触发器
错误报告
 */

// 错误处理函数
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr";
    error_log("Error: [$errno] $errstr",1,
        "someone@example.com","From: webmaster@example.com");
}

// 设置错误处理函数
set_error_handler("customError");

// 触发错误
echo($test);



//在脚本中用户输入数据的位置，当用户的输入无效时触发错误是很有用的。在 PHP 中，这个任务由 trigger_error() 函数完成。



/*您可以在脚本中任何位置触发错误，通过添加的第二个参数，您能够规定所触发的错误级别。

可能的错误类型：

E_USER_ERROR - 致命的用户生成的 run-time 错误。错误无法恢复。脚本执行被中断。
E_USER_WARNING - 非致命的用户生成的 run-time 警告。脚本执行不被中断。
E_USER_NOTICE - 默认。用户生成的 run-time 通知。在脚本发现可能有错误时发生，但也可能在脚本正常运行时发生。*/

$test=2;
if ($test>1)
{
    trigger_error("变量值必须小于等于 1");
}