<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/14
 * Time: 20:32
 */ ?>
<?php
    // 内置函数， md5加密处理
    echo md5('123456');
    // 自定义函数 无参（）内无参数 无返回 无return
    function functionName () {
        echo '无参数无返回函数'.'<br>';
    }
    functionName();
    // 有参数
    function functionArea ($radius) {
        $area = $radius *$radius * pi();
        echo '半径为'.$radius.','.'面积为'.$area.'<br>';
    }
    functionArea(20);
    // 有参数 有返回
    function functionArea2 ($radius) {
        $area = $radius *$radius * pi();
        return $area;
    }
    echo functionArea2(20);
?>