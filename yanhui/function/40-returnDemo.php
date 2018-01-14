<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/14
 * Time: 20:54
 */ ?>
<?php
    function a($a,$b,$c) {
        $d[] = $a;
        $d[] = $b;
        $d[] = $c;
        return $d;
    }
    print_r(a(1,2,3));
    list($a,$b,$c) = a(3,5,9);
    echo $a,$b,$c;
?>