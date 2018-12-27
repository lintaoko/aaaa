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
        $result = mysqli_query($link , "insert into commentlist values('$fromId','$content','$userName')");
    }
}