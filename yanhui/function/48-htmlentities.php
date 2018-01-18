<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 22:25
 */ ?>
<?php
    $a = '<strong>基本都是减肥的</strong>';
    echo $a;
    echo '<br>';
    // htmlentities 将字符转换为 HTML 转义字符
    echo htmlentities($a);
    echo '<br>';
    echo htmlspecialchars($a);
    echo '<br>';
    // strip_tags 去除html
    echo strip_tags($a);
?>