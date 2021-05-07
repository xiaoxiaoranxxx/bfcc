<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>对象输出</title>
</head>

<body>
    <?php echo ($stu->id); ?>
    <?php echo ($stu->name); ?>
    <hr>我的环境变量
    <?php echo ($_SERVER['PATH']); ?>
    C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;
    C:\Windows\System32\WindowsPowerShell\v1.0\;
    C:\Windows\System32\OpenSSH\;
    E:\xiaoxiaoran\MicrosoftVS Code\bin;
    PYTHONIOENCODING=UTF8;
    E:\xiaoxiaoran\Xshell 7\;
    E:\xiaoxiaoran\Xftp 7\;
    E:\xiaoxiaoran\Git\cmd;
    C:\Program
    Files\Java\jdk1.8.0_191\bin;
    C:\Program
    Files\Java\jdk1.8.0_191\jre\bin;
    D:\phpStudy\PHPTutorial\php\php-7.2.1-nts;
    C:\Users\Administrator\AppData\Local\Programs\Python\Python36\Scripts\;
    C:\Users\Administrator\AppData\Local\Programs\Python\Python36\;
    C:\Users\Administrator\AppData\Local\Programs\Python\Python39\Scripts\;
    C:\Users\Administrator\AppData\Local\Programs\Python\Python39\;
    C:\Users\Administrator\AppData\Local\Programs\Python\Python38\Scripts\;
    C:\Users\Administrator\AppData\Local\Programs\Python\Python38\;
    C:\Users\Administrator\AppData\Local\Microsoft\WindowsApps;
    C:\Users\Administrator\AppData\Local\Programs\Fiddler;
    E:\xiaoxiaoran\MicrosoftVS Code\bin;
    D:\mingw64\bin;
    <hr>
    $Think.get.id
    $Think.request.pid
    $Think.cookie.PHPSESSID<hr>
    <?php echo (C("")); ?>
</body>

</html>