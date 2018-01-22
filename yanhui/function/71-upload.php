<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 21:37
 */ ?>
<?php
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
    // 只允许jpg图片
    if ($_FILES['userfile']['type'] != 'image/jpeg') {
        echo "<script>alert('本站只允许jpg图片');history.back();</script>";
        exit;
    }
    // 接收上传文件
    print_r($_FILES);
    echo '<br>';
    // is_uploaded_file 判断文件是否是通过 HTTP POST 上传的
    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        echo '上传的临时文件，已找到，等待移动中';
        echo '<br>';
        // move_uploaded_file 将上传的文件移动到新位置
        if (!move_uploaded_file($_FILES['userfile']['tmp_name'],'upload/'.$_FILES['userfile']['name'])) {
            echo '移动失败';
            exit;
        }else {
            echo '移动成功';
            echo "<script>alert('文件上传成功');location.href='71-upload2.php?url=".'upload/'.$_FILES['userfile']['name']."';</script>";
        }
    } else {
        echo "<script>alert('临时文件夹，找不到上传文件').history.back();</script>";
    }
?>