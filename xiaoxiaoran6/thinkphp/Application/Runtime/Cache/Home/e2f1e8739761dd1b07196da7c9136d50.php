<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<body>
    <script>
        //http://127.0.0.1/xiaoxiaoran/bfcc/xiaoxiaoran6/thinkphp/index.php/home/index/register.html
        window.onload = function () {
            document.getElementById('username').onblur = function () {
                var username = encodeURIComponent(this.value);
                var req = new XMLHttpRequest();
                req.open('post', '/xiaoxiaoran/bfcc/xiaoxiaoran6/thinkphp/index.php/Home/Index/checkUser');
                req.onreadystatechange = function () {
                    if (req.readyState == 4 && req.status == 200) {
                        var flag = parseInt(req.responseText);
                        if (flag) {
                            alert('此用户已存在...');
                            //document.getElementById('username').select();
                            return false;
                        } else {
                            alert('ok');
                        }
                    }
                }
                req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                req.send('username=' + username);
            }
        }
    </script>
    <form action="" method="POST">
        <table>
            <tr>
                <td>username:</td>
                <td><input type="text" name="" value="" id="username"></td>
            </tr>
            <tr>
                <td>password:</td>
                <td><input type="text" id="pwd"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="pass"></td>
            </tr>
        </table>
    </form>
</body>

</html>