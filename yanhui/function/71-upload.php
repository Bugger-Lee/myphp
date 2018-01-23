<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 21:37
 */ ?>
<?php

    // 接收上传文件
    print_r($_FILES);
    // 只允许jpg,png,gif图片
//    switch ($_FILES['userfile']['type']) {
//        case 'image/jpeg': // 火狐
//            break;
//        case 'image/pjpeg': // IE
//            break;
//        case 'image/gif':
//            break;
//        case 'image/png': // 火狐
//            break;
//        case 'image/x-png': // IE
//            break;
//        default:
//            echo "<script>alert('本站只允许jpg,png,gif图片');history.back();</script>";
//            exit;
//    }
    //创建一个常量
    define('MAX_SIZE',2000000);
    define('URL',dirname(__FILE__).'/upload2');
    $fileType = array('image/jpeg','image/pjpeg','image/gif','image/png','image/x-png');
    // is_array 判断是否是数组 in_array 判断是否是数组里的一种
    if (is_array($fileType)) {
        if (!in_array($_FILES['userfile']['type'],$fileType)) {
            echo "<script>alert('本站只允许jpg,png,gif图片');</script>";
            exit;
        }
    }

    // 判断如果上传错误
    if ($_FILES['userfile']['error'] > 0) {
        switch ($_FILES['userfile']['error']) {
            case 1: echo "<script>alert('上传文件超过约定值');history.back();</script>";
                break;
            case 2: echo "<script>alert('上传文件超过约定值');history.back();</script>";
                break;
            case 3: echo "<script>alert('部分文件被上传');history.back();</script>";
                break;
            case 4: echo "<script>alert('没有文件被上传');history.back();</script>";
                break;
        }
        exit;
    }
    // 判断目录是否存在
    // is_dir 判断给定文件名是否是一个目录
    // mkdir 新建目录 0777最大访问权限
    if (!is_dir(URL)) {
        mkdir(URL,0777);
    }
    // 接收上传文件
    print_r($_FILES);
    echo '<br>';
    // is_uploaded_file 判断文件是否是通过 HTTP POST 上传的
    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        echo '上传的临时文件，已找到，等待移动中';
        echo '<br>';
        // move_uploaded_file 将上传的文件移动到新位置
        if (!move_uploaded_file($_FILES['userfile']['tmp_name'],URL.'/'.$_FILES['userfile']['name'])) {
            echo '移动失败';
            exit;
        }else {
            echo '移动成功';
            echo URL.'/'.$_FILES['userfile']['name'];
            echo "<script>alert('123')</script>";
            echo "<script>alert('文件上传成功');location.href='71-upload2.php?url=".URL.'/'.$_FILES['userfile']['name']."';</script>";
        }
    } else {
        echo "<script>alert('临时文件夹，找不到上传文件').history.back();</script>";
    }
?>