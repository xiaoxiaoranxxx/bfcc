<?php

require "MiniSmarty.class.php";

$smarty = new MiniSmarty;

$smarty->assign('title', 'xiao');
$smarty->assign('content', 'xiao666');
$smarty->assign('xiao1', 'xiao666666');

$smarty->display('2.html');

