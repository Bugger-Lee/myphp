<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/24
 * Time: 8:05
 * Demo: 打水印
 */ ?>
<?php
    define('__DIR__',dirname(__FILE__).'\\');
    header('Content-Type: image/png');
    // imagecreatefrompng 由文件或 URL 创建一个新图象
    $img = imagecreatefrompng(__DIR__.'\upload2year.png');
    $white = imagecolorallocate($img,255,67,1);
    imagestring($img,5,70,400,'ljwl20061006@163.com',$white);
    imagepng($img);
    imagedestroy($img);
?>