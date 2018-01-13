<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 18:22
 */ ?>
<?php
    $path = 'D:\wamp\www\test\myphp\yanhui\01-eachDemo.php';
    echo basename($path);
    echo '<br>';
    echo dirname($path);
    echo '<br>';
    // pathinfo 返回数组包含有 path 的信息
    $p = pathinfo($path);
    print_r($p);
    echo '<br>';
    echo $p['extension'];
    echo '<br>';
    echo $p['filename'];
?>