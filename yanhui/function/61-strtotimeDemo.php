<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21
 * Time: 18:18
 */ ?>
<?php
    // strtotime 将任何字符串的日期时间描述解析为时间戳
    echo strtotime('2018-8-8 8:8:8');
    echo '<br>';
    echo date('Y-m-d',getlastmod());
    echo '<br>';
    echo date('Y-m-d H:i:s');
    echo '<br>';
    putenv('TZ=Asia/Shanghai');
    // date_default_timezone_set 设定默认时区
    echo date_default_timezone_set('Asia/Shanghai');
    // date_default_timezone_get 获取当前时区
    echo date_default_timezone_get();
    echo date('Y-m-d H:i:s');
?>