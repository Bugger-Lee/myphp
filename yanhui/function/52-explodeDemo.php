<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 7:38
 */ ?>
<?php
    $a = 'ljwl20061006@163.com';
    // explode 使用一个字符串分割另一个字符串
    $email = explode('@',$a);
    print_r($email);
    echo '<br>';
    // implode 将一个一维数组的值转化为字符串
    $b = implode('@',$email);
    echo $b;
?>