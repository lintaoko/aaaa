<?php header("Content-type: text/html; charset=utf-8");
?>
<div style="width: 600px;">
        <form action="../index.php?c=login&a=login" method="post">
            <br>
用户名：<input type="text" name="userName" value="">
            密码：<input type="text" name="userPass" value="">
            <input type="submit" name="dosub" value="提交">
        </form>
    </div>
