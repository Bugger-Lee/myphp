<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 21:06
 */ ?>
<?php
    $a = 'ljwl20061006@163.com';
    // substr_count 计算字串出现的次数
    echo substr_count($a,'0');
    echo '<br>';
    // strstr 查找字符串的首次出现 区分大小写 stristr不区分
    echo strstr($a,'@');
    echo '<br>';
    // strpos 查找字符串首次出现的位置
    echo strpos($a,'l');
    echo '<br>';
    // strrpos 计算指定字符串在目标字符串中最后一次出现的位置
    echo strrpos($a,'l');
    echo '<br>';
    // str_replace 子字符串替换 将$a 中的1替换为8  区分大小写  str_ireplace不区分
    echo str_replace('1','8',$a);
    echo '<br>';
    // substr_replace 替换字符串的子串 将$a中从第0个开始的8个 用#####替换
    echo substr_replace($a,'#####',0,8);
    echo '<br>';
    echo '<br>';
    echo '<br>';
?>