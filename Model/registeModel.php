<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-20
 * Time: 18:56
 */class registeModel
{

    public function PandEJ($userEmail,$userPhone){
        //判断邮箱与电话
if(isset($userPhone)){


}
        else {
            echo '登陆失败';
            header("Location:View/registe.php");
        }
    }
    public function registe($userName,$userPass,$userEmail,$userPhone)
    {
        $link =mysqli_connect("localhost", "root","", "messagesystem");
        //判断是否有重名用户
        $result = mysqli_query($link , "SELECT * FROM User where userName='$userName'");
        if (mysqli_fetch_assoc($result))
        {
            echo
            header("Location:View/msgs.php?c=msgs&a=getmsgs");
        }else{
            $result = mysqli_query($link, "insert into User VALUE ('$userName','$userPass','$userEmail','$userPhone') ");
            header("Location:View/login.php");
        }
    }
}