<?php

namespace Admin\Controller;  //声明当前类命名空间

use Think\Controller;  //引入父类控制器

class TestController extends Controller
{
    // 127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran6\thinkphp\index.php\Admin\Test\test
    public function test()
    {
        echo 'hello world...';
    }
}
