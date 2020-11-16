<?php
/*
PHP Simple Logger By D4rk h7ml
Love to Coding,Wish to Spreading
*/


$s = "IP::";
$ip = $_SERVER["REMOTE_ADDR"];
$os = "\n\n\nBrowser, Os, Device::";
$b = $_SERVER['HTTP_USER_AGENT'];
mail("someone@gmail.com","Log Info",$s.$ip.$os.$b);
?>
