<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/12
 * Time: 7:47
 */ ?>
<?php
    $b=array('ali'=>'马云','tengxun'=>'马化腾','baidu'=>'李彦宏','aliyun'=>'马云','tengxunyun'=>'马化腾');
    print_r($b);
    echo '<br>';
    // array_unique  移除数组中重复的值
    $a=array_unique($b);
    print_r($a);
    echo '<br>';
    $c=array(1,2,1,5,6,5,2,4,8,9);
    print_r($c);
    $d=array_unique($c);
    echo '<br>';
    print_r($d);
?>
