<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test5</title>
</head>

<body>
    <p>444</p>
    <p>
        在User控制器下的test5方法中展示test5.html
    </p>
    <p>
        传递变量--><?php echo ($var); ?>
        <br>分割符在 convention.php 165行
    </p>
    <!-- 普通注释会在模板输出 -->
    {<!-- 注释不会会在模板输出 -->}
</body>

</html>