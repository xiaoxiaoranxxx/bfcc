<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>xiaoxiaoran|肖萧然|图书查询系统</title>
    <meta name="keywords" content="xiaoxiaoran|肖萧然|肖萧然最秀">
    <meta name="description" content="xiaoxiaoran|图书查询系统">
    <meta name="application-name" content="肖萧然">
    <link rel="shortcut icon" type="image/x-icon" href="https://xiuxiu-1306082599.cos.ap-beijing.myqcloud.com/images/images/xiaologo.png" />
    <link rel="stylesheet" href="../css/normalize.min.css">
    <link rel='stylesheet prefetch' href='../css/demo.css'>
    <link rel="stylesheet" href="../css/style.css">
   
    <script>
        setInterval(function() {
            var date = new Date();
            var format = [
                ("0" + date.getHours()).substr(-2), ("0" + date.getMinutes()).substr(-2), ("0" + date.getSeconds())
                .substr(-2)
            ].join(":");

            document.getElementById("output").innerHTML = format;
        }, 500);
    </script>
    <script type="text/javascript">
        function playPause() {
            var myAudio = document.getElementById('myvideo');
            if (myAudio.paused)
                myAudio.play();
            else
                myAudio.pause();
        }
    </script>
</head>

<body>


    <div id="container">
        <img src="../images/1.jpg">
        <img src="../images/2.jpg">
        <img src="../images/3.jpg">
        <img src="../images/4.jpg">
        <img src="../images/4.jpg">
    </div>


    <div id="large-header" class="large-header">
        <canvas id="demo-canvas"></canvas>
        <h1 class="main-title">

            <?php
            require $_SERVER['DOCUMENT_ROOT'] . '/inc/conn.php ';
            header('Content-Type:text/html;charset=utf-8');

            function redirect($url, $msg, $time = 3)
            {
                header("Refresh:{$time};url={$url}");
                echo "$msg";
                exit;
            }

            if (isset($_REQUEST['authcode'])) {
                session_start();
                if (!(strtolower($_REQUEST['authcode']) == $_SESSION['authcode'])) {
                    redirect('index.php', '<script>alert("验证码错误")</script>', 0);
                }
            }


            if (isset($_POST['submit'])) {
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);
                if (empty($username) || empty($password)) {
                    redirect('index.php', '<script>alert("用户名密码不能空")</script>', 0);
                }
                function my_error($sql)
                {
                    $res = mysql_query($sql);
                    if (!$res) {
                        echo "<br>语法错误.";
                        exit;
                    }
                    return $res;
                }
                $username = addslashes($username);
                $password = md5($password);
                $sql = "select * from pr_admin where username='{$username}' and password='{$password}'";
                $res = my_error($sql);
                $user = mysql_fetch_assoc($res);
                if (!$user) {
                    redirect('index.php', '<script>alert("用户名密码false")</script>', 0);
                }
                session_start();
                $_SESSION['username'] = $username;

                redirect('admin.php', '<script>alert("登录成功")</script>', 0);
            } else {
                include_once 'login.php';
            }
            ?>
        </h1>




        <script src="../js/Pack.min.js"></script>
        <script src="../js/node.js"></script>
        <script src="../js/Lite.min.js"></script>
        <script src="../js/index.js"></script>
    </div>

   
</body>

</html>