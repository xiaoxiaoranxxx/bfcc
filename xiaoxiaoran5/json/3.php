<?php
// 127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran5\json\3.php
mysql_connect('127.0.0.1', 'root', 'root');
mysql_select_db("xiaoxiaoran");
mysql_query('set names utf8');
$rs = mysql_query('select count(*) from region');
$rows = mysql_fetch_array($rs);
$recordcount = $rows[0];
$pagesize = 78;
$pagecount = ceil($recordcount / $pagesize);
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
if ($pageno < 1) $pageno = 1;
if ($pageno > $pagecount) $pageno = $pagecount;
$startno = ($pageno - 1) * $pagesize;
$sql = "select * from region limit $startno,$pagesize";
$rs = mysql_query($sql);
$info = array();
while ($rows = mysql_fetch_assoc($rs)) {
    $info[] = $rows;
}
// print_r($info);
$info[]=$pagecount;  //最后一个发送总页码
echo json_encode($info);
