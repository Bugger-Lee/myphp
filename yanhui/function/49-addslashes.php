<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 22:32
 */ ?>
<?php
    $a = 'This is My brother.He is"Lee",\n This';
    echo $a;
    echo '<br>';
    // addslashes 该字符串为了数据库查询语句等的需要在某些字符前加上了反斜线
    echo addslashes($a);
    $b = addslashes($a);
    echo $b;
    echo '<br>';
    // stripcslashes 返回反转义后的字符串
    echo stripcslashes($b);
    echo '<br>';
?>