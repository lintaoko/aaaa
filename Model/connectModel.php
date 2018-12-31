<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-13
 * Time: 20:11
 */
class connectModel
{
    public function connect()
    {
        header("Content-type: text/html; charset=utf-8");
        $link =mysqli_connect("66.42.41.221", "root","zx123456", "messagesystem");
        mysqli_set_charset($link,"utf8");
        if (!$link) {
            echo "Connect failed: ", mysqli_connect_error();
            exit();
        }
    }
}