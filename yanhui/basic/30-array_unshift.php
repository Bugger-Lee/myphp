<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 14:14
 */ ?>
<?php
    $a = array('马云');
    print_r($a);
    echo '<br>';
    // array_unshift 在数组前面插入数据 输出目前数组个数
    echo array_unshift($a,'马化腾');
    echo '<br>';
    print_r($a);
    echo '<br>';
    // array_push 在数组后面插入数据 输出目前数组个数
    echo array_push($a,'刘强东');
    echo '<br>';
    print_r($a);
    echo '<br>';
    // array_shift 删除开头的元素
    echo array_shift($a);
    echo '<br>';
    print_r($a);
    echo '<br>';
    // array_shift 删除结尾的元素
    echo array_pop($a);
    echo '<br>';
    print_r($a);
?>