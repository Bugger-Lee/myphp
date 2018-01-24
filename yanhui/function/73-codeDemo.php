<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/24
 * Time: 7:45
 * Demo: 简单的验证码
 */
?>
<?php
    // dechex 十进制转换为十六进制
//    echo dechex(mt_rand(0,15));
    for ($i = 0; $i < 4;$i++) {
        $n =$n.dechex(mt_rand(0,15));
    }
//    echo $n;
    header('Content-Type: image/png');
    $img = imagecreatetruecolor(500,500);
    $bg = imagecolorallocate($img,0,210,255);
    $white = imagecolorallocate($img,255,255,255);
    imagefill($img,0,0,$bg);
    imagestring($img,5,2,25,'sty',$white);
    imagepng($img);
    imagedestroy($img);
?>