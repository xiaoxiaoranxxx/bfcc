<?php

include "../smarty/libs/Smarty.class.php";

$smarty = new Smarty();

$smarty->assign('addr', 'xiao111');
$smarty->assign('name', 'xiao222');

$smarty->assign('get', $_GET['name']);

$smarty->assign('hobby', 'xiu');

$smarty->assign('fruit', array('banana', 'apple', 'orange', 'pear', 'xiu1'));
$smarty->assign('fruitt', array('q1' => 'banana', 'q2' => 'apple', 'q3' => 'orange'));

$smarty->assign('week',3);





$smarty->display("1.html");
