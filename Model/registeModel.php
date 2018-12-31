<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-20
 * Time: 18:56
 */class registeModel
{


    public function captcha($captcha)
    {
        if (strtolower($_SESSION["captcha"]) == strtolower($captcha)) {
            $_SESSION["captcha"] = "";
        } else {
            echo "<script>alert('验证码错误')</script>";
            header("Refresh:0.5;url=View/registe.php");
            exit();
        }
    }

    public function PandEJ($userEmail, $userPhone)
    {

        //判断邮箱与电话
        if ($this->checkMail($userEmail)&&$this->checkTelno($userPhone)) {

        } else {
            echo "<script>alert('邮箱或电话不符')</script>";
            header("Refresh:0.5;url=View/registe.php");
            exit();
        }
    }

    public function registe($userName, $userPass, $userEmail, $userPhone)
    {
        $link = mysqli_connect("66.42.41.221", "root", "zx123456", "messagesystem");
        //判断是否有重名用户
        $result = mysqli_query($link, "SELECT * FROM user where userName='$userName'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>alert('此用户已存在')</script>";
            header("Refresh:0.5;url=View/registe.php");
        } else {
            mysqli_query($link, "insert into user VALUE ('$userName','$userPass','$userEmail','$userPhone') ");
            echo "<script>alert('注册成功')</script>";
            header("Refresh:0.5;url=View/login.php");
        }
    }

    function checkTelno($tel)
    {

        if (preg_match("/^((13[0-9])|147|(15[0-35-9])|180|182|(18[5-9]))[0-9]{8}$/A",$tel)) {
            return true;
        } else {
            return false;
        }
    }

    function checkMail($email)
    {
//用户名，由“w”格式字符、“-”或“.”组成
        $email_name= "\w|(\w[-.\w]*\w)";
//域名中的第一段，规则和用户名类似，不包括点号“.”
        $code_at= "@";
        $per_domain= "\w|(\w[-\w]*\w)";
//域名中间的部分，至多两段
        $mid_domain= "(\." .$per_domain. "){0,2}";
//域名的最后一段，只能为“.com”、“.org”或“.net”
        $end_domain= "(\.(com|net|org))";
        $rs= preg_match(
            "/^{$email_name}@{$per_domain}{$mid_domain}{$end_domain}$/",
            $email
        );
        return (bool)$rs;
    }
}