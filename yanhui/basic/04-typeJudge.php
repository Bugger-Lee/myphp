<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5
 * Time: 22:21
 */ ?>
<?php
    $sum=100;
    $float=12.12;
    echo is_integer($sum);
    echo is_integer($float);
    echo is_float($float);
    // intval()转换类型，临时转换
    echo intval($float);
    echo ($float);


?>