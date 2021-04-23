<?php
class Person
{
    private $xiao_name;
    public function getName()
    {
        echo '--->the person is a name' . "\n";
    }
}
class Student extends Person
{
    private $name;
    private $sex;
    public function __construct()
    {
        echo '初始化完成...' . "\n";
    }
    public function setInfo($name, $sex)
    {
        if ($name == '') {
            echo 'name not null';
            exit;
        }
        if ($sex != 'man' && $sex != 'woman') {
            echo 'the sex false';
            exit;
        }
        $this->name = $name;
        $this->sex = $sex;
        //parent::__construct($name,$sex) 给父类传值
    }
    public function show()
    {
        echo 'show_name-->' . $this->name, "\n";
        echo 'show_sex-->' . $this->sex;
    }
    public function __destruct()
    {
        echo "\n销毁了{$this->name}";
    }
}

// $xiao2 = new Student();
// $xiao2->setInfo('xiao2', 'man');
// $xiao2->getName();
// $xiao2->show();


// protected 可以在整个继承链上访问

class xiao
{
    public static $national = 'chinese  ';
    public static function show()
    {
        echo 'This is a static';
    }
}
// echo xiao::$national;  //静态属性
// xiao::show();
//静态指各个对象所共享的方法


class User
{
    public static $count = 0;
    public function __construct()
    {
        self::$count++;
    }
    public function __destruct()
    {
        self::$count--;
    }
    public function showCount()
    {
        return self::$count;
        //static::$count 延迟绑定
    }
}

// $xiao1=new User();
// $xiao2=new User();
// $xiao3=new User();
// $xiao4=new User();
// echo $xiao1->showCount();
// unset($xiao1);
// echo $xiao2->showCount();

//final 类不能继承,方法不能重写
//abstract 抽象方法,类:只有方法的声明;不允许实例化,必须在子类中重新实现

abstract class Goods
{
    protected $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    abstract public function getName();  //定义规范,
}
class Book extends Goods
{
    public function getName()
    {
        echo "<{$this->name}>";
    }
}

// $book=new Book();
// $book->setName('xiaoxiaoran');
// $book->getName();

//interface  接口是特殊的抽象类all
//接口允许多重实现
//先继承类,后实现接口
interface Goodss
{
    const xiao = 666;
    function add();
    function updatew();
}
class GoodsA implements Goodss
{
    public function add()
    {
        echo '实现接口';
    }
    public function updatew()
    {
        echo '实现接口';
    }
}

//在项目中,一个文件只能放一个类 以xxx.class.php结尾
//自动加载类 || 通过命名规则加载类
//spl_autoload_register('funxtion');  
//spl_autoload_register('__autoload');  
function __autoload($class_name)
{
    require "./{$class_name}.class.php";
    //地址不规则,映射到数组中
    $map = array(
        'xiao1' => '../aa/1.php',
        'xiao2' => '../bb/1.php'
    );
    require $map[$class_name];
}

//serialize()  序列化  
//__sleep()  规定那些应该被序列化  __wakeup
//unserialize()  资源;类名

class studenta
{
    private $is_clone = false;
    public function __clone()  //克隆时自动调用的函数
    {
        $this->is_clone = true;
        echo 'xiao';
    }
}
// $stu1 = new Studenta();
// $stu2 = clone $stu1;  //克隆 new的

//单例模式 一个类只有一个对象
class Mysqldb
{
    private static $instance;
    private function __construct()
    {
        //私有构造函数阻止类外部实例化
    }
    private function __clone()
    {
        //私有阻止clone对象
    }
    public static function getInstance()
    {
        if (!self::$instance instanceof self)
            self::$instance = new self;
        return self::$instance;
    }
}
// $db1 = Mysqldb::getInstance();
// $db2 = Mysqldb::getInstance();
// var_dump($db1, $db2);



//工厂模式  传递不同参数调用不同对象
abstract class Produst
{
    abstract public function getName();
}
class ProdustA extends Produst
{
    public function getName()
    {
        echo 'this is a';
    }
}
class ProdustB extends Produst
{
    public function getName()
    {
        echo 'this is b';
    }
}
class ProdustFactory
{
    public static function create($num)
    {
        switch ($num) {
            case 1:
                return new ProdustA();
            case 2:
                return new ProdustB();
        }
        return null;
    }
}

// $obj=ProdustFactory::create(1);
// $obj->getName();
// $obj=ProdustFactory::create(2);
// $obj->getName();


//策略模式  传递不同参数调用不同方法

interface IStrategy
{
    function onthegy();
}
class Walk implements IStrategy
{
    public function onthegy()
    {
        echo 'walk';
    }
}
class Bike implements IStrategy
{
    public function onthegy()
    {
        echo 'Bike';
    }
}

class Bus implements IStrategy
{
    public function onthegy()
    {
        echo 'bus';
    }
}
class Strategy
{
    public function getWay(IStrategy $obj)
    {
        $obj->onthegy();
    }
}

// $obj = new Strategy();
// $obj->getWay(new Walk);
// $obj->getWay(new Bike);
// $obj->getWay(new Bus);

//属性重载,方法重载 对不存在的可以加进去

echo __DIR__;
echo __FILE__;
echo __LINE__;
//__tostring() 把对象当字符串时自动调用
//__invoke() 把对象当函数时自动调用
//__set() 给无法访问的属性赋值时自动调用
//__get() 给无法访问的属性取值时自动调用
//__unset() 销毁无法访问的属性时自动调用
//__isset() 当判断一个无法访问的属性是否存在时自动调用
//__call()  当调用一个不存在的普通方法时自动调用
//__callstatic() 当调用一个不存在的静态方法时自动调用

class testt1{
    public function __invoke($name) //匿名函数
    {
        echo "hello {$name}";
    }
    public function __toString()
    {
        return '-->xiao'.serialize($this);
    }
}
// $xiao=new testt1;
// $xiao('xiaoxiaoran');
// echo $xiao;

class studentt
{
    private $stu_id;
    private $stu_name;
    private $stu_age;
    private $stu_money=50000;
    private static $stu_nums = 0;
    public function __set($name, $value)
    {
        $allow_write = array('stu_id', 'stu_name', 'stu_age');
        if (in_array($name, $allow_write)) {
            if ($name == 'stu_age') {
                if (is_integer($value) && $value >= 0 && $value <= 150) {
                    $this->$name = $value;
                } else {
                    echo 'false age';
                    return false;
                }
            } else {
                $this->$name = $value;
            }
        }else {
            echo 'no no xiugai';
            return false;
        }
    }
    public function __get($name){
        $allow_read=array('stu_id','stu_name');
        if (in_array($name, $allow_read)) {
            return $this->$name;
        }else{
            echo "this {$name} do not to look..";
            return false;
        }
    }
}
// $stu=new studentt;
// $stu->stu_id=9999;
// $stu->stu_name=9999;
// $stu->stu_age=99;
// $stu->stu_money=99;
// echo '<pre>';
// var_dump($stu);

class math
{
    public function __call($name, $arguments)
    {
        if ($name == 'f1') {
            $len = count($arguments);
            if ($len < 1 || $len > 3) {
                return 'false number arguments';
            }
            switch ($len) {
                case 1:
                    return $arguments[0] * $arguments[0];
                    break;
                case 2:
                    return pow($arguments[0], 2) + pow($arguments[1], 2);
                    break;
                case 3:
                    return pow($arguments[0], 3) + pow($arguments[1], 3) + pow($arguments[2], 3);
            }
        } elseif ($name == 'f2') {
        } elseif ($name == 'f3') {
        }
    }
}
// $xiao=new math();
// echo $xiao->f1(214.22);
// echo $xiao->f1(21,4.22);
// echo $xiao->f1(2,14.2,2);

//对象的一般遍历-->只遍属性

//迭代器
class Studentc
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function __get($key)
    {
        return $this->$key;
    }
}
class Php implements Iterator
{
    private $stu_list = array();
    public function addstu(Studentc $stu)
    {
        $this->stu_list[] = $stu;
    }
    public function rewind()
    {
        reset($this->stu_list);  //指针复位
    }
    public function valid()
    {
        return key($this->stu_list) !== null;  //指针合法
    }
    public function current()
    {
        return current(($this->stu_list));
    }
    public function key()
    {
        return key($this->stu_list);
    }
    public function next()
    {
        next($this->stu_list);
    }
}
$class = new Php();
$class->addstu(new Studentc('xiao1'));
$class->addstu(new Studentc('xiao2'));
$class->addstu(new Studentc('xiao3'));
foreach ($class as $stu) {
    echo $stu->name;
}

// class_exists();
// interface_exists();
// method_exists();
// get_class();
// get_parent_class();
// get_class_methods();
// is_object();
// is_bool();
 
//命名空间 thinkphp3.2
namespace xiao1\xiao2\xiaoxiaoran;

function getName()
{
    echo __NAMESPACE__, "\n";
}
const xiu = 666;
echo xiu,"\n";   //非限定名称访问,只能访问当前空间   666
getName();   //非限定名称访问  xiao1\xiao2\xiaoxiaoran
\xiao1\xiao2\getName();  //完全限定名称访问,可访问父类,--->任意空间  xiao1\xiao2

namespace xiao1\xiao2; //只能控制-->常量,函数,类

function getName()
{
    echo __NAMESPACE__, "\n";
}
xiaoxiaoran\getName();  //限定名称访问,只能访问子空间  xiao1\xiao2\xiaoxiaoran
getName();  //xiao1\xiao2









