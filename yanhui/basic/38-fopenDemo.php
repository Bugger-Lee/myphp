<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 20:12
 */ ?>
<?php
    // fopen 打开一个文件，第一个参数表示文件名，第二个参数表示模式
    // w 只写 若文件存在，删除数据，重新建立
    // 若不存在 自行创建
    $fp = fopen('38-fileText.php','w');
    // fwrite 向文件里写内容
    fwrite($fp,'<?php echo "123"?>;');
    // fclose 关闭文件
    fclose($fp);
    // file_put_contents 直接写入一句话
    file_put_contents('38-fileText2.php','<?php $a=5; echo $a; ?>;')
?>

