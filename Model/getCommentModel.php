<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/27
 * Time: 18:06
 */

class getCommentModel
{
    function getComment($id){
        $link =mysqli_connect("localhost", "root","", "messagesystem");
        $result = mysqli_query($link , "SELECT * FROM commentlist where fromId='$id'");
        $data =array();
        while ($rows= mysqli_fetch_array($result)){
//存储数据到数组
            $comment =new comment();
            $comment->setFromId($rows["id"]);
            $comment->setContent($rows["content"]);
            $comment->setUserName($rows["userName"]);
            array_push($data,$comment);
        }
        return $data;
    }

}