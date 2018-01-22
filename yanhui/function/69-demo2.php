<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 9:42
 */ ?>
<?php
    if (isset($_COOKIE['name'])) {
        echo '欢迎光临：'.$_COOKIE['name'];
    }else {
        echo '非法登陆';
    }

?>