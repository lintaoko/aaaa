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
        $link =mysqli_connect("66.42.41.221", "root","zx123456", "messagesystem");
        $result = mysqli_query($link , "SELECT * FROM commentlist where fromid=$id ");
        $data =array();
        while ($rows= mysqli_fetch_array($result)){
//存储数据到数组
            $comment =new comment();
            $comment->setFromId($rows["fromId"]);
            $comment->setContent($rows["content"]);
            $comment->setUserName($rows["userName"]);
            array_push($data,$comment);
        }
        return $data;
    }

}