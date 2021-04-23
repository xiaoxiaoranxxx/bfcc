<?php
//header('Content-Type:text/html;charset=utf-8');
include_once '/public/public.php';
if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if (empty($username) || empty($password)) {
        redirect('login.php','用户名密码不能空');
    }
    include_once '/public/mysql.php';
    $username = addslashes($username);
    $password = md5($password);
    $sql = "select * from pr_admin where username='{$username}' and password='{$password}'";
    $res = my_error($sql);
    $user = mysql_fetch_assoc($res);
    if (!$user) {
        redirect('login.php','用户名密码false');
    }
    redirect('index.php','登录成功',1);
} else {
    include_once '/templates/login.html';
}
