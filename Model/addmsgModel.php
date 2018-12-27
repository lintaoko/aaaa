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
        $result = mysqli_query($link , "insert into msgslist values('$img1','$img2','$img3','$userName','$content',$like)");
    }
}