<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 8:45
 */ ?>
<?php
    // setcookie 定义Cookie 第一个参数 名称，第二个参数 值,第三个参数 过期时间，
    setcookie('name','Leeo',time()+(7*24*60*60));
    setcookie('age','24',time()+(7*24*60*60));
    echo $_COOKIE['name'];
    // 判断cookie是否存在
    echo isset($_COOKIE['name']);
    // 删除cookie
    function f1() {
        if (isset($_COOKIE['age'])) {
            echo 'age存在';
        }else {
            echo 'age不存在';
        }
    }
    f1();
    setcookie('age','',time()-1);
    f1();
?>