<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/10
 * Time: 8:17
 */ ?>
<?php
    $a=array('ali'=>'马云','tengxun'=>'马化腾','baidu'=>'李彦宏');
    while (!!$b=each($a)){
        echo $b['key'].'---'.$b['value'].'<br>';
    }
?>