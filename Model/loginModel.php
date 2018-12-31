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
        $_SESSION["captcha"] = "";
    }else{
        echo "<script>alert('验证码错误')</script>";
        header("Refresh:0.5;url=View/login.php");
        exit();
    }
}
    public function login($userName,$userPass)
    {

        $link =mysqli_connect("66.42.41.221", "root","zx123456", "messagesystem");
        $result = mysqli_query($link , "SELECT * FROM user where userName='$userName' and userPass='$userPass'");
        if (mysqli_fetch_assoc($result))
        {
            echo "<script>alert('登陆成功')</script>";
            $_SESSION['user']=$userName;
            header("Refresh:1;url=index.php?c=msgs&a=getmsgs");

        }else{
            echo "<script>alert('用户名或密码不符')</script>";
            header("Refresh:1;url=View/login.php");
        }
    }
}