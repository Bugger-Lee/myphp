<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/12
 * Time: 8:14
 */ ?>
<?php
    $b=array('ali'=>'马云','tengxun'=>'马化腾','baidu'=>'李彦宏');
    print_r($b);
    echo '<br>';
    // array_flip 交换数组中的值和键
    $a=array_flip($b);
    print_r($a);
?>
