<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 19:38
 */ ?>
<?php
    //这是相对路径，realpath将相对路径，转为绝对路径
    $path = '34-realpathDemo.php';
    echo realpath($path);
    $path = '../index.txt';
    echo realpath($path);
?>