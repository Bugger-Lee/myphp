<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 19:55
 */ ?>
<?php
    $path = '34-realpathDemo.php';
    // date_default_timezone_set 设置时区
    date_default_timezone_set('Asia/Shanghai');
    // fileatime() 返回最后一次访问的时间戳
    echo date('Y-m-d H:i:s',fileatime($path));
    echo '<br>';
    // filectime() 返回最后一次改变的时间戳  所有者 权限
    echo date('Y-m-d H:i:s',filectime($path));
    echo '<br>';
    // filemtime() 返回最后一次修改的时间戳   里面的内容
    echo date('Y-m-d H:i:s',filemtime($path));
?>