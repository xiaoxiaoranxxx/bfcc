<?php
header("content-type:text/html;charset=utf-8");

$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;  //去空白,必须在前面
$doc->load('./test1.xml');
// $node = $doc->getElementsByTagName('name')->item(0)->firstChild;
// echo $node->nodeValue;

// 节点     nodeType    nodeName
//文档节点      9           #document
//元素节点      1           标签名
//属性节点      2           属性名
//值节点        3           #text
//注释节点      8           #comment

function getChilds($node)
{
    echo '<ul>';
    if ($node->nodeType == 3) {
        echo '<li>' . $node->nodeValue . '</li>';
    } else {
        echo '<li>' . $node->nodeName . '</li>';
        if ($node->attributes->length > 0) {
            foreach ($node->attributes as $attr) {
                echo '<li>' . $attr->value . '</li>';
            }
        }
        foreach ($node->childNodes as $child) {
            getChilds($child);
        }
    }
    echo '</ul>';
}
$root = $doc->getElementsByTagName('books')->item(0);
getChilds($root);
