<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username']))
    echo "尊敬的admin,欢迎回来！！";
else
    header("Refresh:0;url=index.php");
