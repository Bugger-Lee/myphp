<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 21:52
 */ ?>
<?php
    $a = 'i,will.go#home';
    // strtok 标记分割字符串
    $b = strtok($a,',.#');
    while ($b) {
        echo $b.'<br>';
        $b = strtok(',.#');
    }

?>