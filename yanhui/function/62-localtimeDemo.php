<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21
 * Time: 18:37
 */ ?>
<?php
    // localtime 取得本地时间 返回一个数组
    date_default_timezone_set('Asia/Shanghai');
    print_r(localtime());
    echo '<br>';
    // microtime 返回当前时间戳和微秒数
    echo microtime();
    echo '<br>';
    list($a,$b) = explode(' ',microtime());
    echo $a;
    echo '<br>';
    echo $b;
    function f1() {
        list($a,$b) = explode(' ',microtime());
        return $a+$b;
    }
    $start_time =f1();
    for ($i = 0; $i < 10000000;$i++) {

    }
    $end_time =f1();
    echo '<br>';
    // 页面加载到加载完用的时间
    echo round(($end_time-$start_time),4);

?>