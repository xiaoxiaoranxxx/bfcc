<?php
$config = require $_SERVER['DOCUMENT_ROOT'] . '/xiaoxiaoran/bfcc/config/config.php';

// var_dump($config);
// exit;

$link = @mysql_connect($config['host'] . ':' . $config['port'], $config['name'], $config['pwd']) or die('连接失败!!!');

//mysql_query("use `xiaoxiaoran`") or die("数据库不存在..");

mysql_select_db($config['database']);
mysql_query("set names {$config['charset']}");
