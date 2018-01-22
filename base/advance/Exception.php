<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 下午2:18
 */

/*
 * PHP 5 提供了一种新的面向对象的错误处理方法。

异常处理用于在指定的错误（异常）情况发生时改变脚本的正常流程。这种情况称为异常。

当异常被触发时，通常会发生：

当前代码状态被保存
代码执行被切换到预定义（自定义）的异常处理器函数
根据情况，处理器也许会从保存的代码状态重新开始执行代码，终止脚本执行，或从代码中另外的位置继续执行脚本
我们将展示不同的错误处理方法：

异常的基本使用
创建自定义的异常处理器
多个异常
重新抛出异常
设置顶层异常处理器
注释：异常应该仅仅在错误情况下使用，而不应该用于在一个指定的点跳转到代码的另一个位置。
 */
class customException extends Exception
{
    public function errorMessage()
    {
        // 错误信息
        $errorMsg = '错误行号 '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> 不是一个合法的 E-Mail 地址';
        return $errorMsg;
    }
}

$email = "someone@example...com";

try
{
    // 检测邮箱
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
    {
        // 如果是个不合法的邮箱地址，抛出异常
        throw new customException($email);
    }
}

catch (customException $e)
{
//display custom message
    echo $e->errorMessage();
}


//set_exception_handler() 函数可设置处理所有未捕获异常的用户定义函数。

/*function myException($exception)
{
    echo "<b>Exception:</b> " , $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');*/