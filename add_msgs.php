<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-9-29
 * Time: 18:59
 */

header("Content-type: text/html; charset=utf-8");
$add_time=date('Y-m-d',time());
$arr1=$_POST;
$name=$arr1['user'];
$text=$arr1['con'];
$link = mysqli_connect("localhost", "root", "", "messages");
mysqli_set_charset($link,"utf8");
if (!$link) {
    echo "Connect failed: ", mysqli_connect_error();
    exit();
}
$result = mysqli_query($link, "update usertable set user_reply=user_reply+1 where user_name='$name'");
$result = mysqli_query($link , "SELECT * FROM usertable where user_name='$name'");
$row = mysqli_fetch_array($result, MYSQLI_BOTH);

$r=$row["User_reply"];
setcookie("times", "$r", time()+3600);
$result = mysqli_query($link, "insert into messagetable VALUE (null,'$name','$name','$add_time','$text') ");
if($result == true){
    echo 'add success!';

    $msg_id = mysqli_insert_id($link);
}else{
    echo mysqli_error($link);
    die;
}
header("Location:msgs.php");