<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/9
 * Time: 7:32
 */ ?>
<?php
    $a=array('知乎','掘金','CSDN');
    print_r($a);
    for($i=0;$i<3;$i++){
        echo $a[$i].'<br>';
    }
    for($i=0;$i<count($a);$i++){
        echo ($i+1).'---';
        echo $a[$i].'<br>';
    }
    foreach ($a as $item){
        echo $item.'<br>';
    }
    foreach ($a as $item=>$bbb){
        echo ($item+1).'---'.$bbb.'<br>';
    }
?>
