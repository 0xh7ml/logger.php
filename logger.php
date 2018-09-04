<?php
/*
PHP Simple Logger By D4rk h7ml
Love to Coding,Wish to Spreading
*/


$file = fopen("ips.txt","w");
$s = "IP::";
fwrite($file,$s);
$ip = $_SERVER["REMOTE_ADDR"];
fwrite($file,$ip);
$i ="\n\n\nOpen Port::";
fwrite($file,$i);
$d = $_SERVER['REMOTE_PORT'];
fwrite($file,$d);
$os = "\n\n\nBrowser, Os, Device::";
fwrite($file,$os);
$b = $_SERVER['HTTP_USER_AGENT'];
fwrite($file,$b);
?>
