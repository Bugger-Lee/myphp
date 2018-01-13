<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 14:44
 */ ?>
<?php
    $a = array('马云','周鸿祎','刘强东','周鸿祎');
    print_r($a);
    echo '<br>';
    // current 获取当前指针的值 默认第一个 指针不会移向下一个
    echo current($a);
    echo current($a);
    echo current($a);
    echo '<br>';
    // next 将指针移向下一个 并获取值
    echo next($a);
    echo current($a);
    echo '<br>';
    echo next($a);
    echo current($a);
    echo '<br>';
    // next 将指针移向上一个 并获取值
    echo prev($a);
    echo current($a);
    echo '<br>';
    // sizeof 是count 的别名
    echo sizeof($a);
    echo '<br>';
    // array_count_values 统计数组中所有值出现的次数
    print_r(array_count_values($a));
    echo '<br>';
    $b = array(1,2,5,1,4,25,65,58,69,45,45,35,35,65,24,26);
    print_r($b);
    echo '<br>';
    print_r(array_count_values($b));
    echo '<br>';
    $c = array('zhifubao'=>'马云','tengxun'=>'马化腾','baidu'=>'李彦宏');
    print_r($c);
    echo '<br>';
    // extract 将key设为变量，将值赋给这个变量
    extract($c);
    echo $zhifubao;
    echo $tengxun;
    echo $baidu;
    echo '<br>';
?>