<?php
header('content-type:text/html;charset=utf-8');

$dsn = "mysql:host=127.0.0.1;port=3306;dbname=xiaoxiaoran;charset=utf8";
$pdo = new PDO($dsn, 'root', 'root');

$sql = "insert into xiao values(null,'xiaoxiaoran',123445)";
$result = $pdo->exec($sql);
if ($result) {
    echo 'succssful  the last id:', $pdo->lastInsertId(), "\n";
    // echo 'succssful  the delete number:', $result;
} else {
    echo 'failed', "\n";
}

$sql = "select * from books";
$stmt = $pdo->query($sql);

$rowcount = $stmt->rowCount();
$columncount = $stmt->columnCount();
echo "the result {$rowcount}:{$columncount}\n";
var_dump($stmt->fetch(PDO::FETCH_ASSOC));  //关联数组
var_dump($stmt->fetch(PDO::FETCH_NUM));  //索引数据组
var_dump($stmt->fetch(PDO::FETCH_OBJ));  //对象

$rows = array();  //遍历结果
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}
var_dump($rows);

$rows = $stmt->fetchAll();  //直接遍
var_dump($rows);

//遍历某一列的值
while ($row = $stmt->fetchColumn(6)) {
    var_dump($row);
}

//mysql的预处理
// PREPARE xiao666 FROM "select * from books where bId = ?";
// SET @id =4;
// EXECUTE xiao666 USING @id;

// PREPARE xiao667 FROM "select * from books where bId < ? && bTypeId = ?";
// SET @id =100;
// SET @bid=4;
// EXECUTE xiao667 USING @id,@bid;
// DROP PREPARE xiao667;

//pdo的预处理
$sql = "insert into xiao values(null,?,?)";
//$sql = "insert into xiao values(null,:name,:password)";

$stmt = $pdo->prepare($sql);
$name = '555';
$password = 'rew341';
$stmt->bindParam(1, $name);  //绑定参数
$stmt->bindParam(2, $password);  //只能用变量

//$stmt->bindParam(':name', $name);  
//$stmt->bindParam(':password', $password);  

$result = $stmt->execute();  //执行并返回结果
if ($result) {
    echo 'ok';
} else echo 'false';


// mysql事务
// start transaction;  //只在内存中
// update xiao1 set name2 =name2-1000 where name1='ccf1';
// update xiao1 set name2 =name2+1000 where name1='ccf2';
// commit;  //事务生效
// rollback; 回滚,关闭事务,撤回
// set autocommit = 0 || 1 ;

//pdo事务
$pdo->beginTransaction();  //开启事务
$flag = true;
$sql = "update xiao1 set name2 =name2-1000 where name1='ccf1'";
$result = $pdo->exec($sql);
if (!$result) $flag = false;
$sql = "update xiao1 set name2 =name2+1000 where name1='ccf2'";
$result = $pdo->exec($sql);
if (!$result) $flag = false;
if ($flag) {
    $pdo->commit();
    echo 'ok';
} else {
    $pdo->rollBack();
    echo 'failure';
}


$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);  //设置大小写
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);  //设置错误模式
$rows = $stmt->fetchAll();


class xiao
{
    public function getprire()
    {
        $price = $_GET['p'];
        if ($price < 0) {
            $e = new Exception($message = 'Error price');  //异常机制抛出
            throw $e;
        } else echo $price;
    }
}

try {
    $book = new xiao;
    $book->getprire();
} catch (Exception $e) {   //捕获异常
    echo $e->getMessage();
}

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //异常机制,对所有的监听
try {
    $sql = "select * from xiao11";
    $stmt = $pdo->query($sql);
} catch (PDOException $e) {
    echo '错误的信息:', $e->getMessage(), '<br>';
    echo '错误的代码:', $e->getCode(), '<br>';
    echo '错误的脚本:', $e->getFile(), '<br>';
    echo '错误的行号:', $e->getLine(), '<br>';
}
