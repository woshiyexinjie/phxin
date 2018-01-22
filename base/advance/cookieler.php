<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 上午10:25
 */

/*
 * cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。
 * 每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值。
 */
?>
<html>
<head>
<meta charset="utf-8">
<title>nandiexin</title>
</head>
<body>

<?php
if (isset($_COOKIE["user"]))
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
else
    echo "普通访客!<br>";
?>

</body>
</html>