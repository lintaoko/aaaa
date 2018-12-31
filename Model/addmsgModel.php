<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/27
 * Time: 20:34
 */

class addmsgModel
{
    function addmsg($img1,$img2,$img3,$userName,$content,$like){
        $link =mysqli_connect("localhost", "root","", "messagesystem");
         if (mysqli_query($link,"INSERT into msgslist(img1,img2,img3,userName,content,`like`) VALUES('$img1','$img2','$img3','$userName','$content','$like')")){
             echo "<script>alert('分享成功')</script>";
         }else{
             echo "<script>alert('分享失败')</script>";
         }
    }
}