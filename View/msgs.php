<h1>高老师的留言板</h1>
<?php header("Content-type: text/html; charset=utf-8");
session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
require('../Model/userModel.php');
require('../Model/msgModel.php');
$msg=unserialize($_SESSION['msg']);
var_dump($msg);
$num = count($msg);
?>

<hr>
<div>
    <div style='float:right;'>
        <img src='img/my.gif' />
    </div>
<h3>你好<?=$_SESSION['user'];  ?></h3>

    <button><a href="../index.php?c=api&a=getdata">查看昨日温州天气</a></button>
    <h2>留言列表：</h2>
    <?php for($i=0;$i<$num;$i++){
    $msg1=new msg();
    $msg1=$msg[$i];
    ?>
    <div style="width: 600px;">
        <div style="border:  1px solid grey; margin-bottom: 10px;">
            <div style="padding: 10px;">
            <?php echo $msg1->content ?>
            </div>
            <div style='background-color:lightgray;'>留言人：<?=$msg1->userName;  ?></div>
        </div>
        <?=$msg1->id ?>
        <a href="../index.php?c=comment&a=getComment&id='<?=$msg1->id?>'">查看评论</a>
        <?php  }?>

    </div>

    <h2>提交留言：</h2>
    <div style="width: 600px;">
        <form action="../add_msgs.php" method="post">
            留言内容：<br>
            <textarea name="con" style="width: 600px;height: 100px;" maxlength="2000"></textarea>
        <input type="hidden" name="user" value="">
            <input type="submit" name="dosub" value="提交">
        </form>
    </div>
<a href="../Mine.php">wode liuyan</a>
    <a href="../tuichu.php">tuichu</a>

</div>