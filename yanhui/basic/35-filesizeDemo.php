<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 19:44
 */ ?>
<?php
    $path = '34-realpathDemo.php';
    echo round(filesize($path)/1024,2).'kb';
    //round()四舍五入函数，第二个参数为保留位数。fliesize 输出字节数
?>