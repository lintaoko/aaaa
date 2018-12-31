<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/27
 * Time: 18:31
 */

class addCommentModel
{
    function addComment($fromId,$content,$userName){
        $link =mysqli_connect("localhost", "root","", "messagesystem");
        if (mysqli_query($link , "insert into commentlist values('$fromId','$content','$userName')")){             echo "<script>alert('分享成功')</script>";
        echo "<script>alert('评论成功')</script>";
        }else{
            echo "<script>alert('评论失败')</script>";
        }
    }
}