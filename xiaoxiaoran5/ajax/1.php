<?php
$fp = fopen('./1.txt', 'a');
$time = date("Y-m-d H:i:s" . "\n");
fputs($fp, $time);

echo 'xiaoxiaoran';

print_r($_GET);
print_r($_POST);