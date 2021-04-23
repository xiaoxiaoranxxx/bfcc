<?php

include "../smarty/libs/Smarty.class.php";

$smarty = new Smarty();

$smarty->caching = 1;

$smarty->assign('animal', array(1, 2, 3, 4, 5, 6, 67));

//$smarty->assign('mytime', date("Y-m-d"), true);





$smarty->display("3.html");
// $smarty->display("3.html",$_GET['page']);  单模板多缓存
// $smarty->display("3.html", $brand . "|" . $price . "|" . $network . "|" . $big);缓存集合  
