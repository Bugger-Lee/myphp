<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/8
 * Time: 8:16
 */ ?>
<?php
    $a=5.2;
    $b=7+$a;
    echo $b;
    if(is_numeric($a)){
        echo 'a是一个数字';
    }else{
        echo 'a不是一个数字';
    }
    if(is_int($a)){
        echo 'a是一个整数';
    }else{
        echo 'a不是一个整数';
    }
?>
