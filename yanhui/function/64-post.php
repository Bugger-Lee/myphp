<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21
 * Time: 21:00
 */ ?>
<?php
    $a = $_POST['one'];
    // htmlspecialchars 将特殊字符转换为 HTML 实体
    $a = trim($a);
    $a = htmlspecialchars($a);
    echo $a;
?>