<html>
<head>
    <meta charset="utf-8">
    <title>nandiexin</title>
</head>
<body>

<form action="" method="get">
    名字: <input type="text" name="fname">
    年龄: <input type="text" name="age">
    <input type="submit" value="提交">
</form>

</body>
</html>
<php>
    欢迎 <?php echo $_GET["fname"]; ?>!<br>
    你的年龄是 <?php echo $_GET["age"]; ?>  岁。
</php>


<!--欢迎 --><?php //echo $_POST["fname"]; ?><!--!<br>-->
<!--你的年龄是 --><?php //echo $_POST["age"]; ?><!--  岁。-->

<!--欢迎 --><?php //echo $_REQUEST["fname"]; ?><!--!<br>-->
<!--你的年龄是 --><?php //echo $_REQUEST["age"]; ?><!--  岁。-->