<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21
 * Time: 17:02
 */ ?>
<?php
    $mode = '/php/';
    $string = 'php';

    if (preg_match($mode,$string)){
        echo '匹配';
    }else{
        echo '不匹配';
    }
?>