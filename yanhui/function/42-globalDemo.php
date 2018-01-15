<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 9:05
 */ ?>
<?php
    $a = 5;
    function f1() {
        // global 设置全局变量
        global $a;
        $a = 2;
    }
    f1();
    echo $a;
    // GLOBALS[]设置超级全局变量 函数内可变
    $GLOBALS['b'] = 3;
    function f2() {
        $GLOBALS['b'] = 6;
    }
    f2();
    echo $GLOBALS['b'];
    print_r($GLOBALS);
?>