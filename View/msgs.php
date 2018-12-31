<h1>林涛的留言板</h1>
<?php header("Content-type: text/html; charset=utf-8");
session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
require('../Model/userModel.php');
require('../Model/msgModel.php');
$msg=unserialize($_SESSION['msg']);
$num = count($msg);
?>

<hr>
<div>
    <div style='float:right;'>
        <img src='img/my.gif' />
    </div>
<h3>你好<?=$_SESSION['user'];  ?></h3>

    <button><a href="../index.php?c=msgs&a=mymsg">查看我的分享</a></button><br/>
    <button><a href="../index.php?c=api&a=getdata">查看昨日温州天气</a></button><br/>
    <button><a href="../index.php?c=login&a=cancel">注销</a></button><br/>
    <h2>留言列表：</h2>
    <?php for($i=0;$i<$num;$i++){
    $msg1=new msg();
    $msg1=$msg[$i];
    ?>
    <div style="width: 600px;">
        <div style="border:  1px solid grey; margin-bottom: 10px;">

            <img src="../img/<?=$msg1->img1?>" onerror="this.style.display='none'" style="height: 100px; width: 100px"/>
            <img src="../img/<?=$msg1->img2?>" onerror="this.style.display='none'" style="height: 100px; width: 100px"/>
            <img src="../img/<?=$msg1->img3?>" onerror="this.style.display='none'" style="height: 100px; width: 100px"/>
            <div style="padding-top: 20px">
            留言内容：<?php echo $msg1->content ?>
            </div>
            <div style='background-color:lightgray;'>留言人：<?=$msg1->userName;  ?></div>
<button><a href="../index.php?c=comment&a=getComment&id=<?=$msg1->id?>">查看评论</a></button>

        </div>
        <?php  }?>

    </div>

    <h2>提交留言：</h2>
    <div style="width: 600px;">
        <form action="../index.php?c=msgs&a=addmsgs" method="post" enctype="multipart/form-data">

            <input type="file" name="img1" onchange="PreviewImage(this,'imgHeadPhoto','divPreview');" size="20">
            <input type="file" name="img2" onchange="PreviewImage(this,'imgHeadPhoto','divPreview');" size="20">
            <input type="file" name="img3" onchange="PreviewImage(this,'imgHeadPhoto','divPreview');" size="20">
            留言内容：<br>
            <textarea name="content" style="width: 600px;height: 100px;" maxlength="200"></textarea>
        <input type="hidden" name="userName" value="<?=$_SESSION['user'];  ?>">
            <input type="submit" name="dosub" value="提交">
        </form>
    </div>

</div>