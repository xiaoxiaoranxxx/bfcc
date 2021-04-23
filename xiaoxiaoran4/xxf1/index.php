<?php

include_once '/public/public.php';

include_once '/public/mysql.php';
$sql = "SELECT * from xxx";
$res = my_error($sql);
$students = array();
while ($row = mysql_fetch_array($res)) {
    $students[] = $row;
}


include_once '/templates/index.html';
