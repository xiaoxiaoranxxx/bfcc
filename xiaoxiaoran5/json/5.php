<?php
//浏览器不支持跨域操作
//php服务器允许,用php文件做代理
//  127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran5\json\5.html

echo file_get_contents('http://www.weather.com.cn/data/sk/101270101.html');