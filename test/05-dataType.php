<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/27
 * Time: 9:10
 */
?>
<?php
    echo 'dataType数据类型';
    echo '<br>'
?>
<?php
    $a='Hello PHP';
    var_dump($a);
    echo '<br>';
    $b=9527;
    var_dump($b);
    echo '<br>';
    $b1=-9527;
    var_dump($b1);
    echo '<br>';
    $b2=0x25;
    var_dump($b2);
    echo '<br>';
    $b3=056;
    var_dump($b3);
    echo '<br>';
    $c=10.56;
    var_dump($c);
    echo '<br>';
    $d=true;
    var_dump($d);
    echo '<br>';
    $d1=false;
    var_dump($d1);
    echo '<br>';
    $e=array("这","是","一","个","数","组");
    var_dump($e);
    echo '<br>';
    $f=Null;
    var_dump($f);
    echo '<br>';
?>
<?php
    echo strlen($a);
    echo '<br>';
    echo strpos($a,'o');
?>

