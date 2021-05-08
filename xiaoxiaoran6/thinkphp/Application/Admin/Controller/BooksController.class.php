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

    //CURD

    public function tianjia()
    {
        $model = M('Books');
        $data = array(
            "bName" => 'xiao',
            "bTypeId" => 6,
            "publishing" => 'xiaoxiaoran',
            "price" => 33,
            "pubDate" => '2010-02-22',
            "author" => 'xiu',
            "ISBN" => '34434'
        );
        $data1 = array(
            "bName" => 'xiao1',
            "bTypeId" => 61,
            "publishing" => 'xiaoxiaoran1',
            "price" => 313,
            "pubDate" => '2010-02-22',
            "author" => 'xiu1',
            "ISBN" => '344314'
        );
        $data2 = array($data, $data1);
        $result = $model->add($data);  //返回新增的主键id
        // $result = $model->addAll($data2); //批量添加
        dump($result);
    }
    public function xiugai()
    {
        $model = M('Books');
        $data = array(
            "bId" => '45',
            "publishing" => 'xiaoxiaoran6666',
            "price" => 315553,
        );
        $result = $model->save($data);
        dump($result); //没有主键会错误,返回受到影响的行数
    }
    public function chaxun()
    {
        $model = M('Books');
        // $model->select() 查全部
        // $model->select(id) 
        // $model->select('id1','id2',...)

        // $model->find() 查表中的第一条记录
        // $model->find(id)  

        // select返回二维数组
        $data = $model->select();
        $data = $model->select(13);
        $data = $model->select('2,12');
        $data = $model->find();
        $data = $model->find(2);

        dump($data);
    }
    public function shanchu()
    {
        $model = M('Books');
        $result = $model->delete(47);//没有主键是错误的，返回受影响行的数量
        dump($result);
    }
}
