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
            echo "验证码正确!";
            $_SESSION["captcha"] = "";
        } else {
            echo "验证码提交不正确!";
            exit();
        }
    }

    public function PandEJ($userEmail, $userPhone)
    {

        //判断邮箱与电话
        if ($this->checkMail($userEmail)&&$this->checkTelno($userPhone)) {

        } else {
            echo '注册失败';
            header("Location:View/registe.php");
            exit();
        }
    }

    public function registe($userName, $userPass, $userEmail, $userPhone)
    {
        $link = mysqli_connect("localhost", "root", "", "messagesystem");
        //判断是否有重名用户
        $result = mysqli_query($link, "SELECT * FROM User where userName='$userName'");
        if (mysqli_fetch_assoc($result)) {

            header("Location:View/registe.php");
        } else {
            $result = mysqli_query($link, "insert into User VALUE ('$userName','$userPass','$userEmail','$userPhone') ");
            header("Location:View/registe.php");
        }
    }

    function checkTelno($tel)
    {
//去掉多余的分隔符
        $tel = ereg_replace("[\(\)\. -]", "", $tel);
//仅包含数字，至少应为一个6位的电话号（即没有区号）
        if (ereg("^\d+$", $tel)) {
            return true;
        } else {
            return false;
        }
    }

    function checkMail($email)
    {
//用户名，由“w”格式字符、“-”或“.”组成
        $email_name = "\w|(\w[-.\w]*\w)";
//域名中的第一段，规则和用户名类似，不包括点号“.”
        $per_domain = "\w|(\w[-\w]*\w)";
//域名中间的部分，至多两段
        $mid_domain = "(\." . $per_domain . "){0,2}";
//域名的最后一段，只能为“.com”、“.org”或“.net”
        $end_domain = "(\.(com|net|org))";
        $rs = preg_match(
            "/^{$email_name}@{$per_domain}{$mid_domain}{$end_domain}$/",
            $email
        );

    }
}