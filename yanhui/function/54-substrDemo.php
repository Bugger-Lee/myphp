<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 21:56
 */ ?>
<?php
    $a = 'ljwl20061006@163.com';
    // substr 返回字符串的子串
    echo substr($a,1,10);
    echo '<br>';
    $b = 'sfdsfsdfd';
    // str_split  将字符串转换为数组
    print_r(str_split($b));
    echo '<br>';
    // strrev 反转字符串
    echo strrev($b);
    echo '<br>';
    // strcmp 字符串比较 2>10 如果 str1 小于 str2 返回 < 0； 如果 str1 大于 str2 返回 > 0；如果两者相等，返回 0。
    echo strcmp('2','10');
    echo '<br>';
    // strnatcmp 使用自然排序算法比较字符串 2<10 同上
    echo strnatcmp('2','10');
    echo '<br>';
    // strspn 计算字符串中全部字符都存在于指定字符集合中的第一段子串的长度。
    echo strspn('163.com','ljwl20061006@163.com',1,3);
    echo '<br>';
    // strlen 获取字符串长度
    echo strlen('This is my person');
?>