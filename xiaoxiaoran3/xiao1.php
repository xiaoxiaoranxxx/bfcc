<?php
function star_study()
{
    $w = 0;

    //mysqli_connect('127.0.0.1','root','root');

    header('content-type:text/html;charset=utf-8');

    echo $w, '<br>';
    print $w . '<br>';
    print_r($w);
}
function Variable_use()
{
    $_name = 122;  //超全局变量

    $a = 10;
    $b = &$a;  //a,b指向同一地址
    $c = $a;   //传值

    $a++;
    echo $b;   //b=11
    echo $c;   //c=10

    unset($a);  //只销毁变量名
    echo $b;   //b=11

    $a = 10;
    $b = 'a';
    echo $$b;  //可变变量,函数名,变量名

    define('name123', 'xiao', true);  //定义常量,true不区分大小写
    echo name123 . "\n";

    define('^~^', 'xiu');  //特殊字符的使用
    echo constant('^~^');
}
function Escape()
{
    $name = 'xiaoxiaoran';
    echo 'my name is $name' . "\n";
    echo 'my name is' . " $name\n";
    echo "my name is $name " . "\n";  //单双引号的区别:单引号是字符串,双引号要运算

    echo "$name is my name" . "\n";
    echo "{$name} is my name" . "\n"; //变量在前
    echo "${name} is my name" . "\n";

    echo "\\xiaoxiaoran zui \"xiu\"";  //转义字符
}
function String_output()
{
    $name = 100;
    echo ord('A');   //ASCll
    echo chr(65);

    echo '<script>';    //输出方法
    echo 'alert(\'xiao\')';
    echo '</script>';

    //字符串定界符,可以输出大量文本,也可以带变量
    echo <<<str
    <script>alert('xiao');</script>
    my name is $name;
str;
}
function Array_declaration()
{
    $stu = array('ds ', 'msf', 'hack');
    $stue = array(1 => 'ds ', 'name' => 'msf', 'hack'); //更改下标
    echo $stu[0] . "\n";

    $emp = array('name' => 'emp', 'sex' => 'boy');
    echo $emp['name'] . "\n";

    $xiao[] = 'w';
    $xiao[] = 't';
    $xiao[] = 'e';
    $xiao[] = 'w';
    $xiao[] = 'q';

    $xiu[true] = "666";  //1
    $xiu[false] = "666";  //0
    $xiu[12.9] = "666";  //int
    $xiu[-12] = "666";   //-int
    $xiu[-12.8] = "666";
    $xiu['19'] = "666";  //int
    $xiu[''] = "666";   //null
    $xiu[null] = "66";  //str


    var_dump($stu);
    var_dump($emp);
    print_r($stu);
    print_r($stu);
    print_r($xiao);
    print_r($xiu);

    $xiuxiu = array(
        'id' => 1,
        'name' => 'xiaoxiaoran',
        'sex' => 'boy'
    );
    extract($xiuxiu);  //声明使用数组的变量
    echo $id . "\n", $name;

    //二维数组
    $stu2 = array(
        array('a', 's', 'd'),
        array(1, 2, 3)
    );
    echo $stu2[1][1];
}
function Type_conversion()
{
    $num1 = 'asd';  //数据类型,自动转布尔
    $num2 = 0;
    if ($num1 == $num1) {
        echo 'ok';
    }
    //强制类型转换
    $num3 = -12;
    $num4 = 12.7;
    var_dump((bool)$num3);
    echo (int)$num4;

    //str非0非空为true
    //int 0为false !0true
    var_dump((bool)'');  //false
    var_dump((bool)'0');  //false
    var_dump((bool)'0.0');  //true
    var_dump((bool)'00');
    var_dump((bool)'false');
    var_dump((bool)'null');  //true
    var_dump((bool)'aa');
    var_dump((bool)1);
    var_dump((bool)-1);
    var_dump((bool)0);  //false
    var_dump((bool)null);  //false
    var_dump((bool)1.1);   //true
    var_dump((bool)0.0);  //false
    var_dump((bool)-1.1);  //true
    var_dump((bool)array());  //false

    $num = 10;
    echo 'a++' . 'a' . "d";  //字符连接
    echo $num % 2 == 0 ? 'ok' : 'no';  //三元运算
}
function Judge_sentences()
{
    #单分支
    $num = 10;
    if ($num == 10) :    //简便写法
        echo '66';
    endif;

    if ($num > 1) echo '00';

    if ($num >= 101) :
        echo '00';
    else :
        echo '01';
    endif;

    if ($num > 1) echo '11100' . "\n";
    else echo '01';

    switch ($num % 3) {
        case 0:
            echo '0';
            break;
        case 1:
            echo '1';
            break;
        case 2:
            echo '2';
            break;
        case 3:
            echo '3';
            break;
        default:
            echo 1;
    }
}
function loop_statement()
{
    for ($i = 1; $i <= 10; $i++) {
        echo "{$i}:xiaoxiaoran<br>" . "\n";
    }

    for ($i = 32; $i <= 126; $i++) {
        echo "{$i}", chr($i), "<br>";
    }

    $sum = 0;
    $i = 1;

    while ($i <= 100) {
        $sum += $i++;
    }
    echo "{$sum}";

    while ($i <= 101) :
        $sum += $i++;
    endwhile;
    echo "{$sum}";
    //有确定次数用for,有条件用while
    //while条件不成立就没有 dowhile会有一次

    //遍历数组
    $stu_array = array(1, 2, 34, 35, 6, 7, 8, 9, 0, 3);
    foreach ($stu_array as $stu) {
        echo $stu, '<br>';
    }

    foreach ($stu_array as $key => $stu) {
        echo $key . '-' . $stu . '<br>';
    }
    //break
    for ($i = 1; $i <= 10; $i++) {
        //if($i==5) break;
        //if($i==5) break 2; 中断两层循环
        if ($i == 5) continue;
        echo "{$i}xiao\n";
    }
    //逆序排列
    $stu = array(1, 2, 3, 4, 5);
    print_r($stu);
    for ($i = 0, $j = count($stu) - 1; $i < $j; $i++, $j--) {
        $temp = $stu[$i];
        $stu[$i] = $stu[$j];
        $stu[$j] = $temp;
        print_r($stu);
    }
    //乘法表
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo "{$j}x{$i}=" . ($j * $i), ' ';
        }
        echo "\n";
    }
}
function functionx()
{

    function fun($args)
    {
        echo $args;
    }
    $str = 'fun';  //函数名储存在变量中
    $str('666');
    echo "\n";

    //匿名函数
    $fn = function ($args = '99') {
        echo $args;
    };
    $fn();  //使用默认值,有多个时没有默认值的要写在前面
    $fn('888');
    echo "\n";

    //创建函数
    // $language = 'eng';
    // if ($language == 'ch')
    //     $fnc = create_function('$name', 'echo \'你好\'.$name;');
    // elseif ($language == 'eng')
    //     $fnc = create_function('$name', 'echo \'hello\'.$name;');
    // $fnc('xiao');

    #检查函数是否存在
    if (function_exists('fun')) {
        fun('0');
    }
    echo "\n";

    //未知参数
    function func()
    {
        $n = func_num_args();  //得到参数个数
        $array = func_get_args();  //转换成数组
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            echo $array[$i], "\n";
            $sum += $array[$i];
        }
        echo 'the sum is:' . $sum, "\n";
    }
    func(1, 2, 3, 4, 6);

    //比较最大值
    function mymax($num1, $num2)
    {
        if ($num1 > $num2) return $num1;
        return $num2;
    }
    echo mymax(12, 33);  //return立即从函数中退出

    //返回函数的引用
    function &Quote()
    {
        $num = 10;
        return $num;  //如果直接返回会报错,只有变量才可以返回引用
    }
    $result = &Quote();  //保存返回值的地址
    echo $result;
    echo "----\n";

    //php默认全局变量只能在函数外部使用,局部变量只能在函数内部使用,有超全局变量

    //变量有生命周期
    function funb()
    {
        static $num1 = 10;  //静态变量
        $num2 = 10;
        $num1++;
        $num2++;
        echo $num1, "\n", $num2, "\n";
    }
    funb();  //11,11
    funb();  //12,11

    $num = 10;  //匿名函数引用变量
    $funk = function () use ($num) {
        $num++;
        echo $num;  //11
    };
    $funk();
    echo $num;  //10

    $funk = function () use (&$num) {
        $num++;
        echo $num;  //11
    };
    $funk();
    echo $num;  //11

    //递归求和
    function Recursion($num)
    {
        if ($num == 1) return 1;
        return $num + Recursion($num - 1);
    }
    echo "---->", Recursion(100);

    //斐波那契数列
    function cal($n)
    {
        if ($n == 1 || $n == 2) return 1;
        return cal($n - 1) + cal(($n - 2));
    }
    echo "--->", cal(15);
    echo "\n";
    for ($i = 1; $i <= 15; $i++) {
        echo "{$i}.", cal($i), ' ';
    }
    //代理调用

    function funh()
    {
        echo __FUNCTION__;  //获取函数名
    }
    funh();  //funh

    $i = 2;  //分解乘法
    function funi($num)
    {
        global $i;
        if ($num % $i == 0) {
            echo  $i . ' ';
            $num = $num / $i;
            funi($num);
        } else {
            if ($num == 1) return;
            $i++;
            funi($num);
        }
    }
    //funi(100);

    //求最大公约数
    function funj($num1, $num2)
    {

        if ($num2 == 0) return $num1;
        return funj($num2, $num1 % $num2);
    }
    function funcc($num1, $num2)
    {
        $su = $num1 * $num2;
        $num = funj($num1, $num2);
        echo $num . ' ';
        echo $su / $num;
    }
    funcc(8251, 6105);
}
function Small_function_imporantt()
{
    require '2.php';
    sleep(2);
    include '2.php';  //区别:require会报错,且不会继续执行

    // require_once  只包含一次
    // include_once
    exit;  //停止,不管那都停  ,  return只停止当前页面
    die('dei');
}
function Array_pointer()
{
    //传值
    $stu = array('tom', 'ww', 'wqe', 'qe', 'qwsd', 'qwex');
    foreach ($stu as $key => $val) {
        $val .= $val;
        echo $val, '<br>';
    }
    var_dump($stu);

    //传址
    $stu = array('tom', 'ww', 'wqe', 'qe', 'qwsd', 'qwex');
    foreach ($stu as $key => &$val) {
        $val .= $val;
        echo $val, '<br>';
    }
    var_dump($stu);

    echo '<br><br>';
    //foreach循环是数组的拷贝
    $stu = array('tom', 'ww', 'wqe', 'qe', 'qwsd', 'qwex');
    foreach ($stu as $key => $val) {
        $stu[$key] = 'hello ' . $val;
        $stu[] = 'xiao';
    }
    var_dump($stu);  //后面加的xiao没有hello

    echo '<br>';
    //数组指针
    $stu = array('tom', 'ww', 'wqe', 'qe', 'qwsd', 'qwex');
    //key current next prev reset end
    end($stu);
    while (key($stu) !== null) {
        echo key($stu), '-', current($stu), '<br>';
        prev($stu);
    }

    //each = key+current+next
    $stu = array('tom', 'ww', 'wqe', 'qe', 'qwsd', 'qwe');
    // while ($s = each($stu)) {
    //     echo $s['key'], '-', $s['value'], '<br>';
    // }
    // reset($stu);  //重复调用需复位
    // while ($s = each($stu)) {
    //     echo $s[0], '-', $s[1], '<br>';
    // }

    //list遍历
    $stu = array('tom', 'ww', 'wqe', 'qe', 'qwsd', 'qwex');
    // while ($s=each($stu)) {
    //     list($key,$value)=$s;
    //     echo $key,'-',$value,'<br>';
    // }
}

function Common_function()
{
    $array1 = range(1, 10);
    $array2 = range(20, 10);
    //var_dump($array2);
    $array_merge = array_merge($array1, $array2);
    //var_dump($array_merge);
    shuffle($array2);
    //var_dump(array_rand($array2, 2));

    //验证码
    $array3 = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
    $index = array_rand($array3, 4);
    shuffle($index);
    $str = '';
    foreach ($index as $i) {
        $str .= $array3[$i];
    }
    echo $str;

    // in_array(); array_key_exists(); isset($aa); 

    //字符串分割
    $xiao = 'xiao xiao ran zui xiu . xiao';
    echo "\n", implode(',', $array1);
    print_r(explode(' ', $xiao));

    //array_diff()差  array_intersect()交

    function xiao($name)
    {
        return 'xiuxiu...' . $name;
    }
    //$new_xiu = array_map('xiao', $array1, $array2);
    $new_xiu = array_map('xiao', $array1);
    print_r($new_xiu);

    $new_xiu = array_map(function ($name) {
        return 'xiuxiu...' . $name;
    }, $array1);

    //array_walk(数组,回调函数)

    array_push($array1, '88');  //入栈  刚最后一个
    array_pop($array1);  //--88出栈

    array_shift($array1);  //队列  先进先出
    array_unshift($array1, 'xiao');  //队列
    print_r($array1);

    //排序
    sort($array1); //按值升序,不保键值
    rsort($array1); //降序
    asort($array1); //保健
    arsort($array1);
    natsort($array1); //自然排序
    usort($array1, function ($num1, $num2) {
        return $num1;
    });  //自定义排序

    trim($xiao);  //去空格
    ltrim($xiao);
    rtrim($xiao);

    strpos($xiao, 'xiao');  //查找第一次出现的字符
    strrpos($xiao, 'xiao');  //最后一次
    str_repeat($xiao, 3);  //重复

    substr($xiao, 0, -1);

    strchr($xiao, 'x');
    strrchr($xiao, 'x');

    str_replace('xiao', '00', $xiao);
    str_replace(array('ran', 'zui'), array('然', '最'), $xiao);
    str_replace(array('ran', 'zui'), '最', $xiao);

    strtolower($xiao);  //大小写
    strtoupper($xiao);

    nl2br($xiao);  //\n=><br>

    htmlspecialchars($xiao); //转换特殊字符<>
}
