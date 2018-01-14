<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/10
 * Time: 7:55
 */ ?>
<?php
    $a=array('baidu'=>'李彦宏','ali'=>'马云','jingdong'=>'刘强东');
    // echo $a;
    print_r($a);
    echo $a['baidu'].'<br>';
    echo $a['ali'].'<br>';
    $b['zhifubao']='马云';
    $b['weixin']='马化腾';
    $b['yujian']='李建';
    print_r($b);
    foreach ($b as $key=>$value){
        echo $key.'---'.$value.'<br>';
    }
    print_r(each($a));

?>