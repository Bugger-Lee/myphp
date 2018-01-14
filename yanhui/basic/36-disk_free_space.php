<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 19:49
 */ ?>
<?php
    // disk_free_space 返回磁盘剩余字节数
    echo round(disk_free_space('C:')/1024/1024/1024,2).'GB';
    echo '<br>';
    // disk_free_space 返回磁盘总字节数
    echo round(disk_total_space('C:')/1024/1024/1024,2).'GB';
?>