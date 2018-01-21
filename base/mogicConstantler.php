<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 上午12:49
 */
echo '这是第 " '  . __LINE__ . ' " 行';
echo "\n";

echo '该文件位于 " '  . __FILE__ . ' " ';

echo "\n";
echo '该文件位于 " '  . __DIR__ . ' " ';

echo "\n";
function test() {
    echo  '函数名为：' . __FUNCTION__ ;
}
test();

echo "\n";
class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();


class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

echo "\n";
echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"