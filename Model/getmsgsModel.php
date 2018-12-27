<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/18
 * Time: 23:21
 */



class getmsgsModel{

    public function getmsgs()
    {
        $link =mysqli_connect("localhost", "root","", "messagesystem");
        $result = mysqli_query($link , "SELECT * FROM msgslist ");
         $data =array();
            while ($rows= mysqli_fetch_array($result)){
//存储数据到数组
                $msg =new msg();
                $msg->setId($rows["id"]);
                $msg->setImg1($rows["img1"]);
                $msg->setImg2($rows["img2"]);
                $msg->setImg3($rows["img3"]);
                $msg->setUserName($rows["userName"]);
                $msg->setContent($rows["content"]);
                array_push($data,$msg);
            }
        return $data;
    }
}