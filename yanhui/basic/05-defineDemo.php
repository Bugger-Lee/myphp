<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5
 * Time: 22:28
 */ ?>
<?php
    define('TO',100);
    echo TO;
    // define 定义常量最好大写，不可更改
    define('TO',200);
    echo TO;
    phpinfo();
    echo $_SERVER["SERVER_NAME"];
    echo $_SERVER["SERVER_PORT"];
?>
