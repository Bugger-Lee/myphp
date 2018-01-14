<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5
 * Time: 22:09
 */ ?>
<?php
    $s=100;
    $b=0;
    // isset() 判断变量是否存在，1 空
    echo isset($b);

    echo isset($s);
    echo isset($a);
    // unset() 销毁变量
    unset($s);
    echo isset($s);
?>
<?php
    $empty='';
    $noEmpty=1;
    //empty()判断变量是否为空 为空返回1 否则空
    echo empty($empty);
    echo empty($noEmpty);
?>
