<?php
// DOM document obiect model
// 每一种语言都有访问dom的方法

$books_array = array(
    'php1' => 'xiuxiu1',
    'php2' => 'xiuxiu2',
    'php3' => 'xiuxiu3',
    'php5' => 'xiuxiu5'
);
$doc = new DOMDocument('1.0', 'utf-8');  //创建
$doc->formatOutput = true;  //格式化输出
$books = $doc->createElement('books');  //创建根
$doc->appendChild($books);  //创建子节点
foreach ($books_array as $k => $v) {
    $book = $doc->createElement('book');
    $name = $doc->createElement('name', $k);
    $books->appendChild($book);
    $book->appendChild($name);
}
$doc->save('./xiaoxiaoran5/php/test1.xml');