<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/26
 * Time: 11:37
 */

header("Content-type: text/html; charset=utf-8");
session_start();
$comment=unserialize($_SESSION['comment']);
$num = count($comment);
for($i=0;$i<$num;$i++) {
    $msg = new msg();
    $msg = $data[$i];
    ?>
    <div>
        <div>评论内容</div>
        <div>评论人</div>
    </div>
    <?php
}
?>

<h2>提交留言：</h2>
<div style="width: 600px;">
    <form action="../.php" method="post">
        留言内容：<br>
        <textarea name="con" style="width: 600px;height: 100px;" maxlength="100"></textarea>
        <input type="hidden" name="userName" value="">
        <input type="submit" name="dosub" value="提交">
    </form>
</div>

