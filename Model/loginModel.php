<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-13
 * Time: 19:37
 */

class loginModel
{

    public  function captcha($captcha){
    if(strtolower($_SESSION["captcha"]) == strtolower($captcha)){
        echo "验证码正确!";
        $_SESSION["captcha"] = "";
    }else{
        echo "验证码提交不正确!";
        exit();
    }
}
    public function login($userName,$userPass)
    {

        $link =mysqli_connect("localhost", "root","", "messagesystem");
        $result = mysqli_query($link , "SELECT * FROM User where userName='$userName' and userPass='$userPass'");
        if (mysqli_fetch_assoc($result))
        {
            echo'登陆成功';
            $_SESSION['user']=$userName;
            header("Location:index.php?c=msgs&a=getmsgs");

        }else{
            echo'登陆失败';
            header("Location:View/login.php");
        }
    }
}