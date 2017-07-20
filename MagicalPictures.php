<?php
/**
* Magical Pictures Of QQ Zone
* @author Zsdroid [635925926@qq.com]
* @package com.zsdroid
* @since
* @access public
* @version 0.1.0.0
*/
require_once('./client.class.php');
$c    = new Client();

$clientIp   = $c->Get_Ip_Addr();
$clientArea = $c->Get_Ip_From($clientIp);
$clientArea = $clientArea['region'].$clientArea['city'].$clientArea['isp'];

$clientTime = date('Y年m月d日',time()).$c->WeekNumber2Chinese(date('w',time()),"星期");

$clientUa   = $c->Get_Useragent();
$clientUa1  = $clientUa[3].$clientUa[5];
$clientUa2  = $clientUa[0].$clientUa[2];

//要显示的文本
$initText   = [];
$initText[] = "欢迎您来自{$clientArea}宽带的朋友\n";
$initText[] = "今天是{$clientTime}\n";
$initText[] = "您的IP是{$clientIp}\n";
$initText[] = "您使用的是{$clientUa1}系统";
$initText[] = "{$clientUa2}浏览器";

$imagePath = "./image.png";
$im        = imagecreatefrompng($imagePath);
$red       = imagecolorallocate($im, 255, 0, 0);
$font      = 'wryh.ttf';
foreach($initText as $key => $value)
{
	imagettftext($im, 15, 0, 20, $key * 20 + 75, $red, $font, $value);
}
header("content-type:image/png");
imagepng($im);
imagedestroy($im);
