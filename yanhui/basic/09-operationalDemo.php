<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 10:32
 */ ?>
<?php
    $a=1;
    $b=2;
    $c=$a+$b;
    $d=$a-$b;
    echo $c;
    echo $d;
    // ++在前先加，在后先等
    $a=++$b;
    $c=$d++;
    echo $a,$b;
    echo $c,$d;
    // 为假打印空 为真打印1
    echo $a!=$b;
    echo $c!=$d;
    echo $c>$a ?'c大于a':'cjhk小于a' ;
?>