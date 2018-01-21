<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21
 * Time: 17:30
 */ ?>
<?php
    // date() 参数一是日期和时间的格式化，参数二是时间戳
    // Y表示4位年份 y表示2位年份
    // M表示英文月份 m表示数字月份
    // D表示英文日 d表示数字日
    echo date('Y-M-D');
    echo '<br>';
    echo date('Y-m-d ');
    echo '<br>';
    // 时 H 表示24小时制 h表示12小时制
    echo date('Y-m-d H');
    echo '<br>';
    echo date('H:i:s z');
    echo '<br>';
    // gettimeofday  取得当前时间
    print_r(gettimeofday());
    $a = gettimeofday();
    echo '<br>';
    // sec 为时间戳
    echo $a['sec'];
    echo '<br>';
    echo date('Y-m-d',$a['sec']);
    echo '<br>';
    echo date('Y-m-d',1416528369);
    echo '<br>';
    print_r(gettimeofday(1));
    echo '<br>';
    // getdate 取得日期／时间信息 返回一个数组
    print_r(getdate());
    echo '<br>';
    // 参数是时间戳
    print_r(getdate(1416528369));
    echo '<br>';
    // time 返回当前时间戳
    echo time();
    echo '<br>';
    echo date('Y-m-d H:i:s a',time()+(60*60*8));
    echo '<br>';
?>