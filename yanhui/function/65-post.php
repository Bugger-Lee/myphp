<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21
 * Time: 21:47
 */ ?>
<?php
    if (!isset($_POST['send']) || $_POST['send'] != '提交' ) {
        header('Location:65-postDemo2.php');
        exit;
    }
    // 接收数据
    $username = $_POST['username'];
    $password = $_POST['password'];
    $code = $_POST['code'];
    $content = $_POST['content'];
    // 判断前先过滤
    $username = trim($username);
    $code = trim($code);
    $content = htmlspecialchars($content);
    // 判断用户名不能小于2位，大于10位
    if (strlen($username) < 2 || strlen($username) > 10) {
        echo "<script>alert('用户名不能小于2位大于10位');history.back()</script>";
        exit;
    }
    // 密码不能小于6位
    if (strlen($password) < 6) {
        echo "<script>alert('密码不能小于6位');history.back()</script>";
        exit;
    }
    // 验证码必须4位，且为数字
    if (strlen($code) != 4 || !is_numeric($code)) {
        echo "<script>alert('验证码必须4位，且为数字');history.back()</script>";
        exit;
    }
    echo '用户名：'.$username.'<br>';
    echo '介绍：'.$content;

?>