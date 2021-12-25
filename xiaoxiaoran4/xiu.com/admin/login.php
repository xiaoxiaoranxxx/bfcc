<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stly.css">
    <title>后台管理系统</title>
    <style>
        input {
            width: 20px;
        }
    </style>

</head>

<body>

    <div class="longindox">
        <h1>后台管理登录</h1>
        <img src="../images/动漫.jpg" class="avatar">
        <form action="index.php" method="post">

            <p align="left">帐户名</p>
            <input type="text" name="username" placeholder="请输入帐户名" ">
            <p align="left">密码</p>
            <input type="password" name="password" placeholder="请输入密码" ">
            <p align="left" height="30" href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='./isyan.php?r='+Math.random() "><img id="captcha_img" src="./isyan.php?r=<?php echo rand(); ?>" alt="" width="100"></p>
            <input type="text" name="authcode" placeholder="请输入验证码" align="left" ">
            <input type="submit" name="submit" value="登录">


        </form>
    </div>
</body>

</html>