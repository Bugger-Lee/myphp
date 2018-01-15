<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 8:57
 */ ?>
<?php
    $a = 2;
    $b = 3;
    function f1(&$a,$b) {
        $a = $a * $a;
        $b = $b + $b;
        echo $a;
        echo '<br>';
        echo $b;
        echo '<br>';
    }
    f1();
    echo $a;
    echo '<br>';
    echo $b;
?>