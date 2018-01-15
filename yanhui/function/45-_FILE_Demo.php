<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 21:30
 */ ?>
<?php
    // __FILE__ 魔法常量 就是一个值 文件名带绝对路径
    $file = __FILE__;
    echo $file;
    echo '<br>';
    require (dirname(__FILE__).'/44-requireDemo.php');
?>