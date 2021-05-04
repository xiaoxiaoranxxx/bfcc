<?php

namespace Home\Controller;  //声明当前类命名空间

use Think\Controller;  //引入父类控制器

class PublicController extends Controller  //声明控制器类并继承父类
{
    public function login()
    {
        $this->display();
    }
}
