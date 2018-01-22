<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 9:42
 */ ?>
<?php

    if(isset($_POST['username']) && $_POST['username'] == 'Lee') {
        setcookie('name','Lee222');
        header('Location: 69-demo2.php');
    } else {
      header('Location: 69-cookieDemo.php');
    }
?>