<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 14:03
 */ ?>
<?php
    $a = array('c'=>'马云','a'=>'周鸿祎','b'=>'李彦宏');
    print_r($a);
    echo '<br>';
    // ksort 按键名排序
    ksort($a);
    print_r($a);
    echo '<br>';
    // krsort 倒序；
    krsort($a);
    print_r($a);
?>
