<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/8
 * Time: 8:33
 */ ?>
<?php
    $a=123456.56754;
    $b=number_format($a,2,'$','#');
    $c=number_format($a,2);
    echo $b.'<br>';
    echo $c.'<br>';
?>
