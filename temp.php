<?php

$c = mysqli_connect("127.0.0.1", "root", "root", "xiaoxiaoran");

$sql = "select username,password from users where username=? and password=?";


$name = "admi' or 1=1 --  ";
$pwd = "admin";
$stmt = mysqli_prepare($c, $sql);
$stmt->bind_param("ss", $name, $pwd);

$stmt->execute();
$row = $stmt->fetch();

if ($row)
    echo "ok" . "\n";
else
    echo "no" . "\n";
