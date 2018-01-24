<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 8:27
 */ ?>
<?php
    // 设置表头
    header('Content-Type: image/png');
    // imagecreate 新建一个基于调色板的图像
    //imagecreatetruecolor 新建一个真彩色图像
    $img = imagecreatetruecolor(200,200);
    // imagecolorallocate 为一幅图像分配颜色
    $blue = imagecolorallocate($img,0,102,255);
    // imagefill 区域填充
    imagefill($img,0,0,$blue);
    $white = imagecolorallocate($img,255,255,255);
    // imageline 画一条线段
    imageline($img,0,0,200,200,$white);
    imageline($img,200,0,0,200,$white);
    // imagestring 水平地画一行字符串
    imagestring($img,5,80,50,'Lee',$white);
    // imagepng 以 PNG 格式将图像输出到浏览器或文件
    imagepng($img);
    // imagedestroy 销毁图像
    imagedestroy($img);
?>