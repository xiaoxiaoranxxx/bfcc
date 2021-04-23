<?php

include "../smarty/libs/Smarty.class.php";

$smarty = new Smarty();

$smarty->assign('seled', array('a', 'b'));
$smarty->assign('outval', array('a' => 'aaaa', 'b' => 'bbb', 'c' => 'ccc', 'd' => 'ddd'));

$smarty->assign('seledd', 2);
$smarty->assign('area',array(1 => 'aa1', 2 => 'bb2', 3 => 'cc3', 4 => 'dd4'));

$smarty->assign("bai",'<p>666</p>');







$smarty->display("2.html");


