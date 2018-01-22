<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 20:52
 */ ?>
<?php
    session_start(); // 开始session会话处理
    $_SESSION['name'] = 'Lee8';
    $_SESSION['name2'] = 'Lee5';
    $_SESSION['name3'] = 'Lee6';
    echo $_SESSION['name'];
    echo $_SESSION['name2'];
    echo $_SESSION['name3'];
    echo '<br>';
    // 删除session
    unset($_SESSION['name']);
    if (isset($_SESSION['name'])) {
        echo '存在';
    } else {
        echo '不存在';
    }
    echo '<br>';
    echo $_SESSION['name2'];
    echo $_SESSION['name3'];
    // 删除所有session
    session_destroy();
    echo '<br>';
    echo $_SESSION['name2'];
    echo $_SESSION['name3'];
?>