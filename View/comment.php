<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/26
 * Time: 11:37
 */

header("Content-type: text/html; charset=utf-8");
session_start();
require ('../Model/commentModel.php');
$comment=unserialize($_SESSION['comment']);
var_dump($comment);
$num = count($comment);
for($i=0;$i<$num;$i++) {
    $comment1 = new comment();
    $comment1 = $comment[$i];
    ?>
    <div>
        <div>评论内容<?=$comment1->content ?></div>
        <div>评论人<?= $comment1->userName ?></div>
    </div>
    <?php
}
?>

<h2>提交留言：</h2>
<div style="width: 600px;">
    <form action="../index.php?c=comment&a=addComment" method="post">
        留言内容：<br>
        <textarea name="content" style="width: 600px;height: 100px;" maxlength="100"></textarea>
        <input type="hidden" name="id" value="<?=$comment1->fromId?>">
        <input type="hidden" name="userName" value="<?= $_SESSION['user']?>">
        <input type="submit" name="dosub" value="提交">
    </form>
</div>

