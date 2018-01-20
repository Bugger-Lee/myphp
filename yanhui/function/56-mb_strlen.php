<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 21:20
 */ ?>
<?php
    $a = '我是李建';
    // mb_strlen 获取字符串的长度 第二个参数为字符编码
    echo mb_strlen($a,'utf-8');
    echo '<br>';
    // mb_substr 获取部分字符串 从$a中的第0个位置开始截取2个字符
    echo mb_substr($a,0,2);
    echo '<br>';
    // mb_strpos 查找字符串在另一个字符串中首次出现的位置
    echo mb_strpos($a,'李',0);
?>