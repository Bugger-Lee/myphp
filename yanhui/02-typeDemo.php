<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5
 * Time: 22:00
 */ ?>
<?php
    $sum=100;
    $total=12.12;
    $sum=$total;
    // 隐式转换
    echo $sum;

?>
<?php
    // gettype()获取类型 需echo输出
    echo gettype($sum);
    // settype()设置类型,永久转换
    settype($sum,'string');
    echo gettype($sum);
    $name=12;
    // 显式转换
    $name=(float)$name;
    echo gettype($name);
?>
