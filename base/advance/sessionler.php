<?php
/**
 * Created by PhpStorm.
 * User: nandiexin
 * Date: 2018/1/22
 * Time: 上午11:11
 */
?>

<?php
session_start();
$_SESSION['views']=1
?>

<html>
<head>
    <meta charset="utf-8">
    <title>nandiexin</title>
</head>
<body>

<?php
// 检索 session 数据
echo "浏览量：". $_SESSION['views'];
?>

</body>
</html>
