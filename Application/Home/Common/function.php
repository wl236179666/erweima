<?php

header("Content-type:text/html;charset=utf-8");

/**
* 调用phpqrcode生成二维码
* @param string $url 二维码解析的地址
* @param int $level 二维码容错级别
* @param int $size 需要生成的图片大小
 *
 * 注意:若要生成二维码文件,将下面的注释打开即可,并将png方法的第二个参数换成 $fileName
*/
function qrcode($url,$level = 3, $size = 6)
{
empty($url) && $this->error('请输入URL');
Vendor('phpqrcode.phpqrcode');
//url
$http = $url;
//容错级别
$errorCorrectionLevel = intval($level);
//生成图片大小
$matrixPointSize = intval($size);
// 生成的文件名
//    $fileName = '/www/web/365/public_html/Public/erweima/aaa.png';
//将二维码地址存入数据库
//    $name = '/Public/erweima/aaa.png';
//    $data['qrcode'] = $name;
//    M('users') -> add($data);
//第二个参数false的意思是不生成图片文件，如果你写上‘picture.png’则会在根目录下生成一个png格式的图片文件
\QRcode::png($http,false, $errorCorrectionLevel, $matrixPointSize, 2);
}