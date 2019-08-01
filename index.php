<?php
header("Content-type: image/JPEG");
include 'function.php';
$im = imagecreatefromjpeg("xhxh.jpg"); 
$ip = $_SERVER["REMOTE_ADDR"];
$weekarray=array("日","一","二","三","四","五","六"); //先定义一个数组
$get=$_GET["s"];
$get=base64_decode(str_replace(" ","+",$get));
//$wangzhi=$_SERVER['HTTP_REFERER'];这里获取当前网址
$url='https://xhboke.com/mz/ip.php?ip='.$ip; 
$data = get_curl($url);
$data = json_decode($data, true);
$country = $data['site']['country']; 
$region = $data['site']['region']; 
//$adcode = $data['site']['adcode']; 
//天气
$weather = $data['city']['weather'];
$temperature = $data['city']['temperature'];
//定义颜色
$black = ImageColorAllocate($im, 0,0,0);//定义黑色的值
$red = ImageColorAllocate($im, 255,0,0);//红色
$font = 'msyh.ttf';//加载字体
//输出
imagettftext($im, 16, 0, 10, 40, $red, $font,'欢迎您来自'.$country.'-'.$region.'的朋友');
imagettftext($im, 16, 0, 10, 72, $red, $font, '今天是'.date('Y年n月j日').' 星期'.$weekarray[date("w")]);//当前时间添加到图片
imagettftext($im, 16, 0, 10, 104, $red, $font,'您的IP是:'.$ip.'   '.$weather);//ip
imagettftext($im, 16, 0, 10, 140, $red, $font,'您使用的是'.$os.'操作系统  '.$temperature.'℃');
imagettftext($im, 16, 0, 10, 175, $red, $font,'您使用的是'.$bro.'浏览器');
imagettftext($im, 14, 0, 10, 200, $black, $font,$get); 
ImageGif($im);
ImageDestroy($im);

