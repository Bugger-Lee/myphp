<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 14:35
 */ ?>
<?php
    $a = array('banner','orange','apple');
    print_r($a);
    echo '<br>';
    // array_rand 随机获取数组的键，第二个参数表明获取几个
    $b = array_rand($a,1);
    print_r($b);
    echo '<br>';
    echo $a[$b];
    echo '<br>';
    $b = array_rand($a,2);
    print_r($b);
    echo '<br>';
    echo $a[$b[0]].$a[$b[1]];
    echo '<br>';
    echo '<br>';
    echo '<br>';
?>