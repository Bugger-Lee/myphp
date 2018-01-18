<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 22:43
 */ ?>
<?php
    $a = 'Lee';
    echo $a;
    echo '<br>';
    // str_pad 使用另一个字符串填充字符串为指定长度
    // STR_PAD_LEFT 填充左
    echo str_pad($a,20,'--',STR_PAD_LEFT).'is goo';
?>