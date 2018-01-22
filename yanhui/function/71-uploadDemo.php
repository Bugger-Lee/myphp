<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 21:30
 */ ?>
<form action="71-upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    上传文件：<input type="file" name="userfile">
    <input type="submit" value="上传">
</form>