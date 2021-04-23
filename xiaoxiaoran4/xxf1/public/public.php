<?php
header('Content-Type:text/html;charset=utf-8');

function redirect($url,$msg,$time=3)
{
    header("Refresh:{$time};url={$url}");
    echo $msg;
    exit;
}