<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21
 * Time: 18:09
 */ ?>
<?php
    // mktime 取得一个日期的时间戳
    $a = mktime(8,8,8,8,8,2008);
    echo $a;
    echo '<br>';
    echo date('Y-m-d H:i:s a',$a);
    $now = time();
    $further = mktime(0,0,0,2,10,2018);
    echo '<br>';
    echo round(($further - $now)/60/60,2).'个小时';
?>