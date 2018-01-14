<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 17:10
 */ ?>
<?php
    // break退出当前循环
    for($a=1;$a<10;$a++){
        if($a==5){
            break;
        }
        echo $a.'<br>';
    }
    echo '还有一句'.'<br>';
    //continue退出当前这个循环，继续循环
    for($a=1;$a<10;$a++){
        if($a==5){
            continue;
        }
        echo $a.'<br>';
    }
    echo '还有一句'.'<br>';
    //exit退出整个循环
    for($a=1;$a<10;$a++){
        if($a==5){
            exit;
        }
        echo $a.'<br>';
    }
    echo '还有一句';

?>