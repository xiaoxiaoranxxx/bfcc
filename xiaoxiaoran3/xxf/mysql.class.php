<?php
header('content-type:text/html;charset=utf-8');

class MySQLDB
{
    private $host;
    private $port;
    private $user;
    private $pass;
    private $charset;
    private $dbname;
    private $link;
    public function __construct($arr)
    {
        $this->init($arr);
        $this->my_connect();
        $this->my_charset();
        $this->my_dbname();
    }
    private function init($arr)
    {
        $this->host = isset($arr['host']) ? $arr['host'] : '127.0.0.1';
        $this->port = isset($arr['port']) ? $arr['port'] : '3306';
        $this->user = isset($arr['user']) ? $arr['user'] : 'root';
        $this->pass = isset($arr['pass']) ? $arr['pass'] : 'root';
        $this->charset = isset($arr['charset']) ? $arr['charset'] : 'utf8';
        $this->dbname = isset($arr['dbname']) ? $arr['dbname'] : '';
    }
    private function my_connect()
    {
        if ($link = @mysql_connect("$this->host:$this->port", $this->user, $this->pass)) {
            $this->link = $link;
        } else echo 'false';
    }
    public function my_query($sql)
    {
        $result = mysql_query($sql);
        if (!$result) {
            echo mysql_error();
            die;
        }
        return $result;
    }
    public function fetchAll($sql)
    {
        if ($result = $this->my_query($sql)) {
            $row = mysql_fetch_assoc($result);
            $rows[] = $row;
            mysql_free_result($result);
            return $row;
        } else {
            return false;
        }
    }
    public function fecthcolum($sql)
    {
        if ($result = $this->my_query($sql)) {
            $row = mysql_fetch_row($result);
            mysql_free_result($result);
            return isset($row[0]) ? $row[0] : false;
        } else {
            return false;
        }
    }
    private function my_charset()
    {
        $sql = "set names $this->charset";
        $this->my_query($sql);
    }
    private function my_dbname()
    {
        $sql = "use $this->dbname";
        $this->my_query($sql);
    }
    public function __destruct()
    {
        mysql_close($this->link);
    }
}

// include './1.php';
$arr = array(
    'dbname' => 'xiaoxiaoran'
);
$db = new MySQLDB($arr);
echo '<pre>';
//var_dump($db);
$sql = "select * from books";
$res = $db->fetchAll($sql);
var_dump($res);
