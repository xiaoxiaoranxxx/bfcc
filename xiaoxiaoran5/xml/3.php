<?php
// DOM document obiect model
// 每一种语言都有访问dom的方法
$doc = new DOMDocument();
$doc->load('3.xml');

$names = $doc->getElementsByTagName('books');
var_dump($names);
