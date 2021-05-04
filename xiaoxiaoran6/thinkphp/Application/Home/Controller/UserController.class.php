<?php

namespace Home\Controller;  //声明当前类命名空间

use Think\Controller;  //引入父类控制器

class UserController extends Controller
{
    //  127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran6\thinkphp\index.php?m=Home&c=User&a=test
    public function test()
    {
        phpinfo();
    }

    // 普通路由形式 (get)
    // http://网址/入库文件?m=分组名&c=控制器名&a=方法名&参数名=参数值
    // 127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran6\thinkphp\index.php?m=Home&c=User&a=xiu&id=1
    // 信息会被显示
    public function xiu()
    {
        echo $_GET['id'];
    }

    // pathinfo(默认)
    // http://网址/入库文件/分组名/控制器名/方法名/参数名1/参数值1/参数名2/参数值2
    // 127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran6\thinkphp\index.php\Home\User\xiu\id\100

    // rewrite  
    // http://网址/分组名/控制器名/方法名/参数名1/参数值1/参数名2/参数值2   //和上面相比少入库文件
    // 修改apache/httpd.conf   mod_rewrite.so打开
    // 虚拟主机  AllowOverride all
    // .htaccess 存在index.php同级目录
    // 127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran6\thinkphp\index.php\Home\User\xiu\id\100

    // 兼容形式

    // 路由形式配置值只影响url组装函数(U函数)生成的形式

    public function test1()
    {
        echo U('Index/index');
    }
    public function test2()
    {
        echo U('Index/index', array('id' => 100));
    }
    // http://127.0.0.1/xiaoxiaoran/bfcc/xiaoxiaoran6/thinkphp/index.php/Home/User/test3
    public function test3()
    {
        $this->success('操作成功', U('test'), 10);
    }
    public function test4()
    {
        $this->error('false', U('test'), 10);
    }
    public function test5()
    {
        echo '6666';
        $var = date('Y-m-d H:i:s', time());
        $this->assign('var', $var); //传递变量给模板
        $this->display();  //同名
    }
    public function test6()
    {
        echo '6666';
        $this->display('test5'); //传递到指定
    }
}
