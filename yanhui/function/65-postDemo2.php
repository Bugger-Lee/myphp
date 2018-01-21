<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21
 * Time: 21:47
 */ ?>
<form action="65-post.php" method="post">
    用户名：<input type="text" name="username"> <br>
    密  码：<input type="password" name="password"> <br>
    验证码：<input type="text" name="code" size="4"> 1234 <br>
    介绍：<textarea rows="6" cols="25" name="content"></textarea> <br>
    <input type="submit" value="提交" name="send">
</form>