<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-20
 * Time: 18:30
 */
?>
<div style="width: 600px;">
        <form action="../index.php?c=registe&a=registe" method="post">
            <br>
            用户名：<input type="text" name="userName" value=""> <br/>
            密码：<input type="text" name="userPass" value=""><br/>
            邮箱：<input type="text" name="userEmail" value=""><br/>
            电话：<input type="text" name="userPhone" value=""><br/>
            <img src="image_captcha.php"  onclick="this.src='image_captcha.php?'+new Date().getTime();" width="200" height="200"><br/>
            <input type="text" name="captcha" placeholder="请输入图片中的验证码"><br/>
            <input type="submit" name="dosub" value="提交">
        </form>
    <button><a href="login.php" onclick="this.src='image_captcha.php?'+new Date().getTime();" width="200" height="200">返回</a></button>
    </div>
