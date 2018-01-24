<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/24
 * Time: 8:38
 */ ?>
<?php
    define('__DIR__',dirname(__FILE__).'\\');
    header('Content-Type: image/png');
    // getimagesize
    //print_r(getimagesize(__DIR__.'\upload2year.png'));
    list($width,$height) = getimagesize(__DIR__.'\upload2year.png');
    $w = $width * 0.4;
    $h = $height * 0.4;
    // 创建一个新图
    $img = imagecreatetruecolor($w,$h);
    $_img = imagecreatefrompng(__DIR__.'\upload2year.png');
    imagecopyresampled($img,$_img,0,0,0,0,$w,$h,$width,$height);

    imagepng($img);
    imagedestroy($img);


?>