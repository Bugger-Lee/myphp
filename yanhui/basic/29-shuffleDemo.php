<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 14:08
 */ ?>
<?php
    $a = array('3','35','26','14','29');
    print_r($a);
    echo '<br>';
    // array_reverse 对数组反向排序
    $b = array_reverse($a);
    print_r($b);
    echo '<br>';
    // shuffle 将数组随机打乱
    shuffle($a);
    print_r($a);
?>