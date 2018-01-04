<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/25
 * Time: 8:52
 */ ?>
<?php
    $a=12;
    $b=29;
    $c=$a+$b;
    echo $c;
?>
</br>
<?php
    $a=100;
    function Test(){
        $b=200;
        $a=200;
        echo $a;
        echo '<br>';
        echo $b;
        echo '<br>';
    }
    Test();
    echo $a;
    echo '<br>';
    echo $b;
    echo '<br>';
?>
<?php
    function myTest(){
        global $a , $b;
        $b=$a+$b;
    }
    myTest();
    echo $b;
    echo '<br>';
?>
<?php
    function myTest2(){
        $GLOBALS['a']=$GLOBALS['a']+$GLOBALS['b']+$GLOBALS['b'];
    }
    myTest2();
    echo $a;
    echo '<br>';
?>
<?php
    function myTest3(){
        static $a=0;
        echo $a;
        echo '<br>';
        $a++;
    }
    myTest3();
    myTest3();
    myTest3();
?>
