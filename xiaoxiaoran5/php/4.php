<?php
header("content-type:text/html;charset=utf-8");

// simpleXML xml文件全转对象,相同元素转数组

// $xml_str=file_get_contents('test1.xml');
// $simple=new SimpleXMLElement($xml_str);
// var_dump($simple);

$simple = simplexml_load_file('test1.xml');
// var_dump($simple);

// add
$book = $simple->addChild('book');
$book->addChild('name', 'xml');
$book->addAttribute('type', 'xiuxiu');
$simple->asXML('test1.xml');

// update
// foreach ($simple->book as $b) {
//     $b->addChild('price', 33);
//     $b->name = '书名:' . $b->name;
// }
// $simple->asXML('test1.xml');


// look
foreach ($simple->book as $b) {
    // var_dump($b->attributes());
    $attrs = $b->attributes();
    echo $b->name, ':', $attrs['type'] . '<br>';
}
