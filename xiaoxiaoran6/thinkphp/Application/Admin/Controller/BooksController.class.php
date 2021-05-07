<?php

namespace Admin\Controller;  //声明当前类命名空间

use Admin\Model\BooksModel;
use Think\Controller;  //引入父类控制器

class BooksController extends Controller  //声明控制器类并继承父类
{
    // 127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran6\thinkphp\index.php\Admin\Books\shilihua
    public function shilihua()
    {
        // $model = new \Admin\Model\BooksModel(); //普通的实例化
        // dump($model); 模型在实例化就自动关联了这张表

        $model = D('Books');  //D实例化自己创建的模型,和普通的是一样的
        //$model = D();  //直接实例化父类的模型

        //$model = M('Books'); //关联数据表
        //$model = M(); //实例化父类的模型,不关联数据表

        //父类不能满足需求就D

        dump($model);
    }
}
