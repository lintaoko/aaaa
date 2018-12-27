<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-10-25
 * Time: 20:34
 */

session_start();
$arr1=$_POST;
$u=$arr1['user'];
$p=$arr1['password'];

//setcookie("user", "$u", time()+3600);
//setcookie("password", "$p", time()+3600);
$link = mysqli_connect("localhost", "root", "", "messages");
mysqli_set_charset($link,"utf8");
if (!$link) {
    echo "Connect failed: ", mysqli_connect_error();
    exit();
}
$result = mysqli_query($link , "SELECT * FROM usertable where user_name='$u' and password='$p'");
if (mysqli_fetch_assoc($result))
{
    $result = mysqli_query($link , "SELECT * FROM usertable where user_name='$u' and password='$p'");
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    var_dump($row);
    $r=$row["User_reply"];
    $_SESSION['user']=$u;
    $_SESSION['password']=$p;
    $_SESSION['times']=$r;
    header("Location:msgs.php");
}else{
    header("Location:login.php");
}

