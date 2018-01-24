<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/24
 * Time: 8:25
 */ ?>
<?php
    define('__DIR__',dirname(__FILE__).'\\');
    header('Content-Type: image/png');
    // imagecreatefrompng 由文件或 URL 创建一个新图象
    $img = imagecreatefrompng(__DIR__.'\upload2year.png');
    $white = imagecolorallocate($img,255,67,1);
    imagestring($img,5,70,400,'ljwl20061006@163.com',$white);
    $font = 'C:\Windows\Fonts\simsun.ttc';
    // imagettftext 加载自己的字体
    imagettftext($img,40,10,10,350,$white,$font,'hello 李建');
    imagepng($img);
    imagedestroy($img);
?>