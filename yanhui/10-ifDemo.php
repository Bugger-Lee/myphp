<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 10:45
 */ ?>
<?php
    $username=19;
    if($username>14){
        echo '成年人!';
    }else{
        echo '未成年';
    }
    $a=60;
    if($a<60){
        echo '不及格';
    }elseif($a>=60&&$a<80){
        echo '及格';
    }elseif($a>=80&&$a<90){
        echo '良好';
    }else{
        echo '优秀';
    }
?>
