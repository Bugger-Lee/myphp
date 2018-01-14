<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/12
 * Time: 7:38
 */ ?>
<?php
    $a=array('aaa','bbb','ccc');
    list($val1,$val2) = $a;
    echo $val1,$val2;
    $b=array('ali'=>'马云','tengxun'=>'马化腾','baidu'=>'李彦宏');
    $c=each($b);
    list($name,$age)=$c;
    echo $name,$age;
    echo $c['key'];
    $c=each($b);
    echo $c['key'];
    // reset 将数组的内部指针调整到第一个位置
    reset($b);
    $c=each($b);
    echo $c['key'];
?>
