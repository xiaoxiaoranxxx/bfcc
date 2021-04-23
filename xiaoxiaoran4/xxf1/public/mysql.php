<?php

$link = @mysql_connect('127.0.0.1', 'root', 'root');

if (!$link) {
    echo "<br>连接失败...";
    exit;
}
function my_error($sql)
{
    $res = mysql_query($sql);
    if (!$res) {
        echo "<br>语法错误...";
        exit;
    }
    return $res;
}
$sql = "set names utf8";
my_error($sql);
$sql = "use project";
my_error($sql);
