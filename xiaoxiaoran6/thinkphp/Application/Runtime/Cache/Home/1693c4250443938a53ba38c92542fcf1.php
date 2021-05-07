<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>函数</title>
</head>

<body>  
    ###表示变量自身
    $变量名|函数1|函数2=参数1,参数,###
    ###使用的函数只有一个参数并且参数是变量自身,可省略
    <?php echo (date('Y-m-d H:i:s',$time)); ?><hr>
    <?php echo (strtoupper(substr($str,0,5))); ?>
    <?php echo (substr($str,0,5)); ?>
</body>

</html>