<?php

namespace Admin\Controller;  //声明当前类命名空间

use Admin\Model\BooksModel;
use Think\Controller;  //引入父类控制器

class BooksController extends Controller  //声明控制器类并继承父类
{
    // 127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran6\thinkphp\index.php\Admin\Books\shilihua
    public function shilihua()
    {
        $model = new \Admin\Model\BooksModel();
        // dump($model); 模型在实例化是就关联了这张表
    }
}
