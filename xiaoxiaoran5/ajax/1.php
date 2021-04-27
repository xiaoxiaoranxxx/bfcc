<?php
$fp = fopen('./1.txt', 'a');
$time = date("Y-m-d H:i:s" . "\n");
fputs($fp, $time);
