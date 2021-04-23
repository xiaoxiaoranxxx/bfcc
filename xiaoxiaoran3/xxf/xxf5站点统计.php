<?php
header('content-type:text/html;charset=utf-8');

$ip = $_SERVER['REMOTE_ADDR'];
file_put_contents('1.txt', $ip . "\r\n", FILE_APPEND);
$info = file('1.txt');
$visits = count($info);
$ip_visits = 0;
$unique_ips = array();
foreach ($info as $each_ip) {
    if (!in_array($each_ip, $unique_ips)) {
        $unique_ips[] = $each_ip;
        if ($ip == trim($each_ip)) $user_visit = count($unique_ips);
    }
    if (trim($each_ip) == $ip) $ip_visits++;
}
$users=count($unique_ips);
echo "你是第{$users}用户,一共{$user_visit}用户,被访问{$visits}次,这时候你你第{$ip_visits}访问";
