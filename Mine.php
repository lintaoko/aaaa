<h1>wodeliuyan</h1>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<hr>
<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "messages");
mysqli_set_charset($link,"utf8");
if (!$link) {
    echo "Connect failed: ", mysqli_connect_error();
    exit();
}
$u=$_SESSION['user'];
if ($result = mysqli_query($link, "SELECT User_name,Message_time,message_word FROM messagetable where user_name='$u'"))
{
}
?>
<div>
    <div style='float:right;'>
        <img src='img/my.gif' />
    </div>
    <h2>留言列表：</h2>
    <?php while($row = mysqli_fetch_assoc($result)){

    ?>
    <div style="width: 600px;">
        <div style="border:  1px solid grey; margin-bottom: 10px;">
            <div style="padding: 10px;">
                <?php echo $row["message_word"] ?>

            </div>
            <div style='background-color:lightgray;'>留言人：<?=$row["User_name"];  ?> 留言时间：<?php echo $row["Message_time"] ?></div>
        </div>
        <?php  }
        mysqli_close($link);
        ;?>

    </div>