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
    <h3>你好<?=$_SESSION['user'];   ?> 这是你的分享内容</h3>

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
        <?php  }?>

    </div>