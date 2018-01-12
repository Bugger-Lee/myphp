<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/12
 * Time: 8:25
 */ ?>
<?php
    $a=array(
        array('苹果','6','5.21'),
        array('猪肉','2','15.89'),
        array('饼干','1','14.35'),
    );
    print_r($a);
    echo '<br>';
    echo '<br>';
    echo $a[0][0].'|'.$a[0][1].'|'.$a[0][2].'<br>';
    echo $a[1][0].'|'.$a[1][1].'|'.$a[1][2].'<br>';
    echo $a[2][0].'|'.$a[2][1].'|'.$a[2][2].'<br>';
    echo '<br>';
    for ($i=0;$i<count($a);$i++) {
        for ($j=0;$j<count($a[$i]);$j++) {
            echo $a[$i][$j].'|';
        }
        echo '<br>';
    }
    echo '<br>';
    // key值不是数字的不能用for+for 要用for+foreach for+while
    $aa=array(
        array('产品'=>'苹果','数量'=>'6','价格'=>'5.21'),
        array('产品'=>'猪肉','数量'=>'2','价格'=>'15.89'),
        array('产品'=>'饼干','数量'=>'1','价格'=>'14.35')
    );
    print_r($aa);
    echo '<br>';
    echo '<br>';
    for ($k=0;$k<count($aa);$k++) {
        foreach ($aa[$k] as $value) {
            echo $value.'|';
        }
        echo '<br>';
    }
    echo '<br>';
    $bb=array(
        array('产品'=>'苹果','数量'=>'6','价格'=>'5.21'),
        array('产品'=>'猪肉','数量'=>'2','价格'=>'15.89'),
        array('产品'=>'饼干','数量'=>'1','价格'=>'14.35')
    );
    for ($k=0;$k<count($aa);$k++) {
        while (!!list($key,$value) = each($bb[$k])) {
            echo $key.'--'.$value.'|';
        }
        echo '<br>';
    }
?>

