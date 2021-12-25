<?php require '../inc/islogin.php' ?>
<?php
require '../inc/conn.php';
$id = (int)$_GET['id'];
$sql = "delete from books where bId=$id";
$title = (int)$_GET['titleid'];
if (mysql_query($sql)) header('location:admin.php?titleid=' . $title);
else echo 'delete false';
