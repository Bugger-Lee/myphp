<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 13:42
 */ ?>
<?php
    $a = array('banner','orange','apple');
    print_r($a);
    echo '<br>';
    // sort对值进行排序，英文按首字母
    sort($a);
    print_r($a);
    echo '<br>';
    // rsort倒序
    rsort($a);
    print_r($a);
    echo '<br>';
    // 数字也可排，汉字有问题。
    $b = array(1,5,35,48,65,21,5,36,4);
    print_r($b);
    echo '<br>';
    sort($b);
    print_r($b);
    echo '<br>';
    rsort($b);
    print_r($b);
    echo '<br>';
    $c = array('2','12');
    print_r($c);
    echo '<br>';
    // 按number排序
    sort($c,SORT_NUMERIC);
    print_r($c);
    echo '<br>';
    // 按string排序
    sort($c,SORT_STRING);
    print_r($c);


?>
