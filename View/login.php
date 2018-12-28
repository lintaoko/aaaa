<?php header("Content-type: text/html; charset=utf-8");
?>
<div style="width: 600px;">
            <form action="../index.php?c=login&a=login" method="post">
            <br>
用户名：<input type="text" name="userName" value="">
            密码：<input type="text" name="userPass" value="">
                <img src="image_captcha.php"  onclick="this.src='image_captcha.php?'+new Date().getTime();" width="200" height="200"><br/>
                <input type="text" name="captcha" placeholder="请输入图片中的验证码"><br/>
            <input type="submit" name="dosub" value="提交">
        </form>

    <button><a href="registe.php" onclick="this.src='image_captcha.php?'+new Date().getTime();" width="200" height="200">注册</a></button>
    </div>
